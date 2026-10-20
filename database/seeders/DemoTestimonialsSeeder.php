<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class DemoTestimonialsSeeder extends Seeder
{
    public function run(): void
    {
        $examples = [
            [
                'customer_name' => 'Demo Client 1',
                'content' => 'This placeholder shows how a short client testimonial will appear on the homepage. Replace with approved feedback before publishing.',
            ],
            [
                'customer_name' => 'Demo Client 2',
                'content' => 'This sample is for previewing the testimonial card layout only. Replace it with a real, approved customer statement.',
            ],
            [
                'customer_name' => 'Demo Client 3',
                'content' => 'Use this area to display approved feedback about a customer experience. This demo entry is not a real testimonial.',
            ],
            [
                'customer_name' => 'Demo Client 4',
                'content' => 'This placeholder can be edited in the admin panel before use. Do not publish sample content as customer feedback.',
            ],
            [
                'customer_name' => 'Demo Client 5',
                'content' => 'Preview how a longer review will look in this card. Replace this illustrative text with approved feedback before publishing.',
            ],
            [
                'customer_name' => 'Demo Client 6',
                'content' => 'This is example content to help review the homepage testimonials section. It should be replaced before publication.',
            ],
            [
                'customer_name' => 'Demo Client 7',
                'content' => 'Placeholder feedback for a document verification service. Replace with approved customer feedback before publishing.',
            ],
            [
                'customer_name' => 'Demo Client 8',
                'content' => 'This demo entry is included to preview testimonial cards and is not a real customer statement.',
            ],
            [
                'customer_name' => 'Demo Client 9',
                'content' => 'Example testimonial text for reviewing the homepage layout. Replace with genuine, approved feedback.',
            ],
            [
                'customer_name' => 'Demo Client 10',
                'content' => 'This placeholder can be updated with an approved review about registration assistance.',
            ],
            [
                'customer_name' => 'Demo Client 11',
                'content' => 'Sample text to help admins preview how a testimonial about application guidance will appear.',
            ],
            [
                'customer_name' => 'Demo Client 12',
                'content' => 'This illustrative review is not real feedback. Replace it with customer-approved wording before publishing.',
            ],
            [
                'customer_name' => 'Demo Client 13',
                'content' => 'Placeholder content for a testimonial card about support with document preparation.',
            ],
            [
                'customer_name' => 'Demo Client 14',
                'content' => 'Example feedback for preview purposes only. Do not publish this sample as a genuine customer review.',
            ],
            [
                'customer_name' => 'Demo Client 15',
                'content' => 'This demo testimonial helps demonstrate a longer customer comment in the homepage design.',
            ],
            [
                'customer_name' => 'Demo Client 16',
                'content' => 'Replace this placeholder with approved feedback describing a customer experience.',
            ],
            [
                'customer_name' => 'Demo Client 17',
                'content' => 'Sample testimonial text for an education support service. This entry is for preview only.',
            ],
            [
                'customer_name' => 'Demo Client 18',
                'content' => 'This is placeholder content and does not represent an actual customer statement.',
            ],
            [
                'customer_name' => 'Demo Client 19',
                'content' => 'Preview how a concise approved client review could be displayed in this section.',
            ],
            [
                'customer_name' => 'Demo Client 20',
                'content' => 'Demonstration feedback for checking the testimonial list and homepage card layout.',
            ],
        ];

        foreach ($examples as $index => $example) {
            Testimonial::firstOrCreate(
                ['customer_name' => $example['customer_name']],
                [
                    ...$example,
                    'designation' => 'Demo content — replace before publishing',
                    'rating' => 5 - ($index % 2),
                    'is_published' => false,
                ],
            );
        }
    }
}
