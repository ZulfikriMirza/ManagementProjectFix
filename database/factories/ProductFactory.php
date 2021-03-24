<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $product_name = $this->faker->unique()->words($nb = 4, $asText = true);
        $slug = Str::slug($product_name);
        return [
            'name' => $product_name,
            'slug' => $slug,
<<<<<<< Updated upstream
            'harga' => $this->faker->numberBetween(10, 500),
            'image' => 'COV_' . $this->faker->unique()->numberBetween(1, 9) . '.png',
            'description' => $this->faker->text(500)
=======
            'harga' => $this->faker->numberBetween(10,500),
            'image' => 'COV_' . $this->faker->unique()->numberBetween(1,9).'.png',
            'description' => $this->faker->text(500),
>>>>>>> Stashed changes
        ];
    }
}
