<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->city,
            'slug' => $faker->unique()->slug,
            'description' => $faker->paragraph($nb =2),
            'price' => $faker->numberBetween($min = 500, $max = 8000),
            
        ];
    }
}
