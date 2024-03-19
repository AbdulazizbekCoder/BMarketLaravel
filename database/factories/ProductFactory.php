<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{

    public function definition(): array
    {
        return [
                'name' => fake()->name(),
                'price' => rand(1, 10000),
                'count' => rand(1, 1000),
                'unit' => 'kg',
                'photo' =>  asset('storage/products_photos/img.png'),
                'description' => null,
        ];
    }
}
