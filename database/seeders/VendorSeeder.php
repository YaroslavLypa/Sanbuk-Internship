<?php

namespace Database\Seeders;

use App\Models\Interfaces\StatusInterface;
use App\Models\User;
use App\Models\Vendor;
use Hash;
use Illuminate\Database\Seeder;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 3; $i++) {
            Vendor::create([
                'status' => StatusInterface::STATUS_ACTIVE,
                'type' => User::TYPE_VENDOR,
                'name' => fake()->name,
                'first_name' => fake()->firstName,
                'last_name' => fake()->lastName,
                'email' => fake()->email,
                'password' => Hash::make('password'),
                'avatar' => fake()->imageUrl,
            ]);
        }
    }
}
