<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        $name = 'super admin';
        $email = 'oxfordprocessingkottayam@gmail.com';
        $password = 'oxfordprocessing';

        if (! $name && ! $email && ! $password) {
            $this->command?->warn('Admin user was not created. Set ADMIN_NAME, ADMIN_EMAIL, and ADMIN_PASSWORD to seed it.');

            return;
        }

        if (! $name || ! filter_var($email, FILTER_VALIDATE_EMAIL) || ! $password || strlen($password) < 12) {
            throw new \RuntimeException('Set a valid ADMIN_NAME, ADMIN_EMAIL, and ADMIN_PASSWORD of at least 12 characters.');
        }

        User::updateOrCreate(
            ['email' => $email],
            [
                'name' => $name,
                'password' => $password,
                'is_admin' => true,
            ],
        );
    }
}
