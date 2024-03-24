<?php

namespace Database\Factories;

use App\Models\Category;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'name' => fake()->text(20),
            
            'price' => fake()->numberBetween(1000, 10000),
            'category_id' =>Category::all()->random()->id,
            
        ];
    }
}
