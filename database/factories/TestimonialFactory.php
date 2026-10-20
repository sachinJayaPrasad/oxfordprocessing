<?php

namespace Database\Factories;

use App\Models\Testimonial;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Testimonial>
 */
class TestimonialFactory extends Factory
{
    protected $model = Testimonial::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_name' => 'Demo Client '.fake()->unique()->numberBetween(1, 9999),
            'designation' => 'Demo content — replace before publishing',
            'content' => 'This is placeholder testimonial content for previewing the website layout. Replace it with approved customer feedback before publishing.',
            'rating' => fake()->numberBetween(3, 5),
            'is_published' => false,
        ];
    }
}
