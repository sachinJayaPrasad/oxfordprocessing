<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class AdminServiceCategoriesController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255', Rule::unique('service_categories', 'name')],
        ]);

        ServiceCategory::create($validated);

        return redirect()->route('admin.services')->with('category_saved', 'created');
    }

    public function update(Request $request, ServiceCategory $serviceCategory): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255', Rule::unique('service_categories', 'name')->ignore($serviceCategory->id)],
        ]);

        DB::transaction(function () use ($serviceCategory, $validated) {
            Service::where('category', $serviceCategory->name)
                ->update(['category' => $validated['name']]);
            $serviceCategory->update($validated);
        });

        return redirect()->route('admin.services')->with('category_saved', 'updated');
    }

    public function destroy(ServiceCategory $serviceCategory): RedirectResponse
    {
        $deletedServices = DB::transaction(function () use ($serviceCategory) {
            $deletedServices = $serviceCategory->services()->delete();
            $serviceCategory->delete();

            return $deletedServices;
        });

        return redirect()
            ->route('admin.services')
            ->with('category_saved', 'deleted')
            ->with('category_deleted_services', $deletedServices);
    }
}
