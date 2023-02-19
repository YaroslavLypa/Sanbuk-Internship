<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Vendor;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {
            User::create([
                'status' => rand(User::STATUS_INACTIVE, User::STATUS_ACTIVE),
                'type' => rand(User::TYPE_USER, User::TYPE_VENDOR),
                'first_name' => fake()->firstName,
                'last_name' => fake()->lastName,
                'name' => fake()->name,
                'email' => fake()->email,
                'password' => \Hash::make('password'),
                'avatar' => fake()->imageUrl,
            ]);
        }
    }
}
