<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServiceCatalogSeeder extends Seeder
{
    public function run(): void
    {
        $services = config('services.catalog', []);

        if ($services === []) {
            throw new \RuntimeException('The service catalog is empty.');
        }

        foreach ($services as $service) {
            $slug = Str::slug($service['title']);

            Service::firstOrCreate(
                ['slug' => $slug],
                [...$service, 'slug' => $slug, 'is_published' => true],
            );
        }
    }
}
