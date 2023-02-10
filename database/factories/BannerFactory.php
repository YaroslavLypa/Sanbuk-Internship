<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Banner>
 */
class BannerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'type' => rand(0,3),
            'entity_id' => rand(1,25),
            'image' => $this->faker->imageUrl(),
            'name' => $this->faker->name,
            'price' => rand(100,1000),
        ];
    }
}
