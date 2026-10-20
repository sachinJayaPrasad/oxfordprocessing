<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Enquiry;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EnquiryController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'status' => ['sometimes', Rule::in(Enquiry::STATUSES)],
            'search' => ['sometimes', 'string', 'max:255'],
        ]);

        $enquiries = Enquiry::query()
            ->when($validated['status'] ?? null, fn ($query, $status) => $query->where('status', $status))
            ->when($validated['search'] ?? null, function ($query, $search) {
                $query->where(function ($query) use ($search) {
                    $query->where('name', 'like', "%{$search}%")
                        ->orWhere('email', 'like', "%{$search}%")
                        ->orWhere('phone', 'like', "%{$search}%");
                });
            })
            ->latest()
            ->paginate(25);

        return response()->json($enquiries);
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate($this->rules());
        $validated['status'] = $validated['status'] ?? 'new';
        $enquiry = Enquiry::create($validated);

        return response()->json(['data' => $enquiry], JsonResponse::HTTP_CREATED);
    }

    public function show(Enquiry $enquiry): JsonResponse
    {
        return response()->json(['data' => $enquiry]);
    }

    public function update(Request $request, Enquiry $enquiry): JsonResponse
    {
        $enquiry->update($request->validate($this->rules(false)));

        return response()->json(['data' => $enquiry->refresh()]);
    }

    public function destroy(Enquiry $enquiry): JsonResponse
    {
        $enquiry->delete();

        return response()->json(status: JsonResponse::HTTP_NO_CONTENT);
    }

    private function rules(bool $create = true): array
    {
        $required = $create ? 'required' : 'sometimes';

        return [
            'name' => [$required, 'string', 'max:255'],
            'email' => ['sometimes', 'nullable', 'email', 'max:255'],
            'phone' => [$required, 'string', 'max:50'],
            'service_category' => [$required, 'string', 'max:255'],
            'service_name' => [$required, 'string', 'max:255'],
            'message' => [$required, 'string', 'max:10000'],
            'status' => ['sometimes', Rule::in(Enquiry::STATUSES)],
            'admin_notes' => ['sometimes', 'nullable', 'string', 'max:10000'],
        ];
    }
}
