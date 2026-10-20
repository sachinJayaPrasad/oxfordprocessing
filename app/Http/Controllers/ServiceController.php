<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Contracts\View\View;

class ServiceController extends Controller
{
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
