<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'generate_id' => '2001',
            'name' => 'Super Admin',
            'email' => 'admin@gmail.com',
            'role' => 1,
            'phone' => Str::random(10),
            'email_verified_at' => now(),
            'password' => Hash::make('admin'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'generate_id' => '2002',
            'name' => 'Mr John',
            'email' => 'user@gmail.com',
            'role' => 2,
            'phone' => Str::random(10),
            'email_verified_at' => now(),
            'password' => Hash::make('user'),
            'remember_token' => Str::random(10),
        ]);
    }
}
