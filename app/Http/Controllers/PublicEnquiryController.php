<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use App\Models\Service;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class PublicEnquiryController extends Controller
{
    public function create(Request $request): View
    {
        $selectedService = Service::query()
            ->where('slug', $request->query('service'))
            ->where('is_published', true)
            ->first();

        $services = Service::query()
            ->where('is_published', true)
            ->orderBy('category')
            ->orderBy('title')
            ->get();

        return view('contact-us', [
            'services' => $services,
            'categories' => $services->pluck('category')->unique()->values(),
            'selectedService' => $selectedService,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:50'],
            'email' => ['nullable', 'email', 'max:255'],
            'service_category' => ['required', 'string', 'max:255'],
            'service_id' => ['required', 'integer', 'exists:services,id'],
            'message' => ['required', 'string', 'min:20', 'max:10000'],
            'privacy_consent' => ['accepted'],
        ]);

        $service = Service::query()
            ->whereKey($validated['service_id'])
            ->where('is_published', true)
            ->first();

        if (! $service || $service->category !== $validated['service_category']) {
            throw ValidationException::withMessages([
                'service_id' => ['Select a valid service in the chosen category.'],
            ]);
        }

        Enquiry::create([
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'email' => $validated['email'] ?? null,
            'service_category' => $service->category,
            'service_name' => $service->title,
            'message' => $validated['message'],
            'status' => 'new',
        ]);

        return redirect()
            ->route('contact')
            ->with('enquiry_submitted', true);
    }
}
