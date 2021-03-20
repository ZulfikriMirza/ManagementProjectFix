<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\AdminHome;

class AdminHomeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AdminHome::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'filename' => 'home_' . $this->faker->unique()->numberBetween(1, 3) . '.jpg',
            'description' => $this->faker->text(35),
        ];
    }
}
