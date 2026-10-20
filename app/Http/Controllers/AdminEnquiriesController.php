<?php

namespace App\Http\Controllers;

use App\Mail\EnquiryStatusMail;
use App\Models\Enquiry;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class AdminEnquiriesController extends Controller
{
    public function show(Enquiry $enquiry): View
    {
        return view('admin.enquiry-detail', [
            'enquiry' => $enquiry,
            'statuses' => Enquiry::STATUSES,
        ]);
    }

    public function index(Request $request): View
    {
        $filters = $request->validate([
            'search' => ['sometimes', 'nullable', 'string', 'max:255'],
            'status' => ['sometimes', 'nullable', Rule::in(Enquiry::STATUSES)],
            'per_page' => ['sometimes', 'integer', Rule::in([10, 20, 50, 100])],
        ]);
        $perPage = (int) ($filters['per_page'] ?? 20);

        $enquiries = Enquiry::query()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where(function ($query) use ($search) {
                    $query->where('name', 'like', "%{$search}%")
                        ->orWhere('email', 'like', "%{$search}%")
                        ->orWhere('phone', 'like', "%{$search}%")
                        ->orWhere('service_name', 'like', "%{$search}%");
                });
            })
            ->when($filters['status'] ?? null, fn ($query, $status) => $query->where('status', $status))
            ->latest()
            ->orderByDesc('id')
            ->paginate($perPage)
            ->withQueryString();

        $statusCounts = Enquiry::query()
            ->selectRaw('status, COUNT(*) as total')
            ->groupBy('status')
            ->pluck('total', 'status');

        return view('admin.enquiries', [
            'enquiries' => $enquiries,
            'totalEnquiries' => Enquiry::count(),
            'statusCounts' => $statusCounts,
            'statuses' => Enquiry::STATUSES,
            'filters' => $filters,
            'perPage' => $perPage,
        ]);
    }

    public function updateStatus(Request $request, Enquiry $enquiry): RedirectResponse
    {
        $validated = $request->validate([
            'status' => ['required', Rule::in(Enquiry::STATUSES)],
        ]);

        $enquiry->update($validated);

        return redirect()->route('admin.enquiries', [
            ...$request->only(['search', 'status', 'per_page']),
            'enquiry' => $enquiry->id,
        ])->with('status_updated', true);
    }

    public function sendEmail(Request $request, Enquiry $enquiry, string $type): RedirectResponse
    {
        if (! $enquiry->email) {
            return back()->withErrors([
                'email' => 'This enquiry has no email address.',
            ]);
        }

        if (in_array(config('mail.default'), ['log', 'array'], true)) {
            return back()->withErrors([
                'email' => 'Email delivery is not configured. Set MAIL_MAILER and valid mail server settings in .env.',
            ]);
        }

        [$subject, $message] = match ($type) {
            'received' => [
                'We have received your enquiry',
                "Hello {$enquiry->name},\n\nWe have received your enquiry about {$enquiry->service_name}. We will get back to you soon.\n\nThank you,\nOxford Processing",
            ],
            'processed' => [
                'Your requested service has been processed',
                "Hello {$enquiry->name},\n\nYour requested service, {$enquiry->service_name}, has been successfully processed.\n\nThank you,\nOxford Processing",
            ],
        };

        Mail::to($enquiry->email, $enquiry->name)->send(new EnquiryStatusMail($subject, $message));

        $returnRoute = $request->routeIs('admin.enquiries.email')
            ? route('admin.enquiries.show', $enquiry)
            : route('admin.enquiries', $request->only(['search', 'status', 'per_page']));

        return redirect($returnRoute)->with('email_sent', $type);
    }
}
