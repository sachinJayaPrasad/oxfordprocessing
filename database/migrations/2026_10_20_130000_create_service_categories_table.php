<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('service_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
        });

        $now = now();
        $categories = DB::table('services')
            ->select('category')
            ->distinct()
            ->pluck('category')
            ->map(fn (string $category) => [
                'name' => $category,
                'created_at' => $now,
                'updated_at' => $now,
            ])
            ->all();

        if ($categories !== []) {
            DB::table('service_categories')->insertOrIgnore($categories);
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('service_categories');
    }
};
