<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $suffix = ['Sweater', 'Trousers', 'Shirt', 'Jeans', 'Jacket', 'Dress', 'Shoes', 'Hat', 'Gloves', 'Socks'];
        $name = fake()->company() . ' ' . $suffix[array_rand($suffix)];

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => fake()->realText(200),
            'price' => fake()->numberBetween(10000, 100000), // $100.00 - $1000.00
        ];
    }
}
