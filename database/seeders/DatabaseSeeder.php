<?php

namespace Database\Seeders;

use App\Models\Cases;
use Faker\Factory;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if(app()->environment() != 'production') {
            User::factory(10)->create();
            Cases::factory(10)->hasNatureOfComplain(10)->create();
            Cases::factory(10)->hasNatureOfComplain(10)->hasLifted()->create();
        }

        User::create([
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin'),
            'remember_token' => Str::random(10),
        ]);
    }
}
