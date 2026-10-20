<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class AdminServicesController extends Controller
{
    public function index(Request $request): View
    {
        $filters = $request->validate([
            'search' => ['sometimes', 'nullable', 'string', 'max:255'],
            'category' => ['sometimes', 'nullable', Rule::exists('service_categories', 'name')],
            'status' => ['sometimes', 'nullable', Rule::in(['published', 'draft'])],
            'per_page' => ['sometimes', 'integer', Rule::in([10, 20, 50, 100])],
            'edit' => ['sometimes', 'integer', 'exists:services,id'],
        ]);

        $perPage = (int) ($filters['per_page'] ?? 20);
        $services = Service::query()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where(function ($query) use ($search) {
                    $query->where('title', 'like', "%{$search}%")
                        ->orWhere('category', 'like', "%{$search}%")
                        ->orWhere('authority', 'like', "%{$search}%");
                });
            })
            ->when($filters['category'] ?? null, fn ($query, $category) => $query->where('category', $category))
            ->when(isset($filters['status']), fn ($query) => $query->where('is_published', $filters['status'] === 'published'))
            ->orderBy('category')
            ->orderBy('title')
            ->paginate($perPage)
            ->withQueryString();

        return view('admin.services-admin', [
            'services' => $services,
            'categories' => ServiceCategory::query()->withCount('services')->orderBy('name')->get(),
            'totalServices' => Service::count(),
            'publishedServices' => Service::where('is_published', true)->count(),
            'draftServices' => Service::where('is_published', false)->count(),
            'filters' => $filters,
            'perPage' => $perPage,
            'editingService' => isset($filters['edit']) ? Service::find($filters['edit']) : null,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate($this->rules());
        $validated['slug'] = $this->uniqueSlug($validated['title']);
        $validated['is_published'] = $request->boolean('is_published');

        Service::create($validated);

        return redirect()->route('admin.services')->with('service_saved', 'created');
    }

    public function update(Request $request, Service $service): RedirectResponse
    {
        $validated = $request->validate($this->rules());
        $validated['is_published'] = $request->boolean('is_published');

        $service->update($validated);

        return redirect()->route('admin.services')->with('service_saved', 'updated');
    }

    public function destroy(Service $service): RedirectResponse
    {
        $service->delete();

        return redirect()->route('admin.services')->with('service_saved', 'deleted');
    }

    private function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'category' => ['required', Rule::exists('service_categories', 'name')],
            'authority' => ['required', 'string', 'max:255'],
            'summary' => ['required', 'string', 'max:5000'],
            'requirements' => ['required', 'string', 'max:5000'],
        ];
    }

    private function uniqueSlug(string $title): string
    {
        $baseSlug = Str::slug($title) ?: 'service';
        $slug = $baseSlug;
        $suffix = 2;

        while (Service::where('slug', $slug)->exists()) {
            $slug = $baseSlug.'-'.$suffix++;
        }

        return $slug;
    }
}
