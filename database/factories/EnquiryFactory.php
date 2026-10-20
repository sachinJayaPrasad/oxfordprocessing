<?php

namespace Database\Factories;

use App\Models\Enquiry;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Enquiry>
 */
class EnquiryFactory extends Factory
{
    protected $model = Enquiry::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $service = Service::query()->inRandomOrder()->first();
        $category = $service?->category ?? fake()->randomElement([
            'Overseas Registration & Licensing',
            'Documentation & Attestation',
            'Education & University Migration',
            'Career Support & Placement',
            'Exam & Language Preparation',
        ]);

        return [
            'name' => fake()->name(),
            'email' => fake()->optional(0.9)->safeEmail(),
            'phone' => fake()->e164PhoneNumber(),
            'service_category' => $category,
            'service_name' => $service?->title ?? fake()->words(3, true),
            'message' => fake()->paragraph(),
            'status' => fake()->randomElement(Enquiry::STATUSES),
            'admin_notes' => fake()->optional(0.25)->sentence(),
        ];
    }
}
