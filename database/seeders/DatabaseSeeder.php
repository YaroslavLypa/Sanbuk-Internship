<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            TypeSeeder::class,
            TripTypeSeeder::class,
            CharterTypeSeeder::class,
            DepartureSeeder::class,
            ExperienceSeeder::class,
            VendorSeeder::class,
            PackageSeeder::class,
        ]);
    }
}
