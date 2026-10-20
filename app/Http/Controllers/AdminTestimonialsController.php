<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminTestimonialsController extends Controller
{
    public function index(Request $request): View
    {
        $filters = $request->validate([
            'edit' => ['sometimes', 'integer', 'exists:testimonials,id'],
        ]);

        return view('admin.testimonials', [
            'testimonials' => Testimonial::query()->latest()->paginate(15)->withQueryString(),
            'editingTestimonial' => isset($filters['edit']) ? Testimonial::find($filters['edit']) : null,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate($this->rules());
        $validated['is_published'] = $request->boolean('is_published', true);

        Testimonial::create($validated);

        return redirect()->route('admin.testimonials')->with('testimonial_saved', 'created');
    }

    public function update(Request $request, Testimonial $testimonial): RedirectResponse
    {
        $validated = $request->validate($this->rules());
        $validated['is_published'] = $request->boolean('is_published');
        $testimonial->update($validated);

        return redirect()->route('admin.testimonials')->with('testimonial_saved', 'updated');
    }

    public function destroy(Testimonial $testimonial): RedirectResponse
    {
        $testimonial->delete();

        return redirect()->route('admin.testimonials')->with('testimonial_saved', 'deleted');
    }

    private function rules(): array
    {
        return [
            'customer_name' => ['required', 'string', 'max:255'],
            'designation' => ['nullable', 'string', 'max:255'],
            'content' => ['required', 'string', 'max:3000'],
            'rating' => ['required', 'integer', Rule::in([1, 2, 3, 4, 5])],
        ];
    }
}
