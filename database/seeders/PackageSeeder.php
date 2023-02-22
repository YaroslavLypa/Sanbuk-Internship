<?php

namespace Database\Seeders;

use App\Models\Interfaces\StatusInterface;
use App\Models\Package;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 3; $i++) {
            Package::create([
                'experience_id' => mt_rand(1, 20),
                'status' => StatusInterface::STATUS_ACTIVE,
                'name' => fake()->name,
                'price' => mt_rand(100, 1000),
                'description' => fake()->text,
                'start_activity' => fake()->dateTimeBetween('-10 days', 'now'),
                'end_activity' => fake()->dateTimeBetween('now', '+7 days'),
            ]);
        }

        for ($i = 0; $i < 2; $i++) {
            Package::create([
                'experience_id' => mt_rand(1, 20),
                'status' => StatusInterface::STATUS_INACTIVE,
                'name' => fake()->name,
                'price' => mt_rand(100, 1000),
                'description' => fake()->text,
                'start_activity' => fake()->dateTimeBetween('-7 days', 'now'),
                'end_activity' => fake()->dateTimeBetween('now', '+7 days'),
            ]);
        }
    }
}
