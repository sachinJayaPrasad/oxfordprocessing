<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class ServiceController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(Service::query()->orderBy('category')->orderBy('title')->paginate(25));
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $this->validateService($request);
        $validated['slug'] = $this->uniqueSlug($validated['title']);
        $validated['is_published'] = $validated['is_published'] ?? true;

        $service = Service::create($validated);

        return response()->json(['data' => $service], JsonResponse::HTTP_CREATED);
    }

    public function show(Service $service): JsonResponse
    {
        return response()->json(['data' => $service]);
    }

    public function update(Request $request, Service $service): JsonResponse
    {
        $validated = $this->validateService($request, $service);

        if (array_key_exists('title', $validated)) {
            $validated['slug'] = $this->uniqueSlug($validated['title'], $service);
        }

        $service->update($validated);

        return response()->json(['data' => $service->refresh()]);
    }

    public function destroy(Service $service): JsonResponse
    {
        $service->delete();

        return response()->json(status: JsonResponse::HTTP_NO_CONTENT);
    }

    private function validateService(Request $request, ?Service $service = null): array
    {
        $required = $service ? 'sometimes' : 'required';

        return $request->validate([
            'title' => [$required, 'string', 'max:255'],
            'category' => [$required, Rule::exists('service_categories', 'name')],
            'authority' => [$required, 'string', 'max:255'],
            'summary' => [$required, 'string', 'max:5000'],
            'requirements' => [$required, 'string', 'max:5000'],
            'is_published' => ['sometimes', 'boolean'],
        ]);
    }

    private function uniqueSlug(string $title, ?Service $service = null): string
    {
        $baseSlug = Str::slug($title) ?: 'service';
        $slug = $baseSlug;
        $suffix = 2;

        while (Service::where('slug', $slug)
            ->when($service, fn ($query) => $query->whereKeyNot($service->getKey()))
            ->exists()) {
            $slug = $baseSlug.'-'.$suffix++;
        }

        return $slug;
    }
}
