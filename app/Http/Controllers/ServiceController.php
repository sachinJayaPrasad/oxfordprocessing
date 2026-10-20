<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request $request): View
    {
        $filters = $request->validate([
            'search' => ['sometimes', 'nullable', 'string', 'max:255'],
            'category' => ['sometimes', 'nullable', 'string', 'max:255'],
        ]);

        $services = Service::query()
            ->where('is_published', true)
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where(function ($query) use ($search) {
                    $query->where('title', 'like', "%{$search}%")
                        ->orWhere('category', 'like', "%{$search}%")
                        ->orWhere('authority', 'like', "%{$search}%")
                        ->orWhere('summary', 'like', "%{$search}%");
                });
            })
            ->when($filters['category'] ?? null, fn ($query, $category) => $query->where('category', $category))
            ->orderBy('category')
            ->orderBy('title')
            ->paginate(12)
            ->withQueryString();

        return view('services', [
            'services' => $services,
            'categories' => ServiceCategory::query()
                ->whereHas('services', fn ($query) => $query->where('is_published', true))
                ->orderBy('name')
                ->pluck('name'),
            'totalPublishedServices' => Service::where('is_published', true)->count(),
            'filters' => $filters,
        ]);
    }

    public function show(string $slug): View
    {
        $service = Service::query()
            ->where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();

        return view('service-inner', [
            'service' => $service,
            'slug' => $slug,
            'relatedServices' => Service::query()
                ->where('category', $service->category)
                ->where('is_published', true)
                ->whereKeyNot($service->getKey())
                ->take(4)
                ->get(),
        ]);
    }
}
