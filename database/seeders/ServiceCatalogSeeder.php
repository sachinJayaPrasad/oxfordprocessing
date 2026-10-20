<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\ServiceCategory;
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
            ServiceCategory::firstOrCreate(['name' => $service['category']]);

            Service::firstOrCreate(
                ['slug' => $slug],
                [...$service, 'slug' => $slug, 'is_published' => true],
            );
        }
    }
}
