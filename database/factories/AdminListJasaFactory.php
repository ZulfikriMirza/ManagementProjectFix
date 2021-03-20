<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\AdminListJasa;

class AdminListJasaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AdminListJasa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'filename' => 'listjasa_' . $this->faker->unique()->numberBetween(1, 3) . '.jpg',
            'heading' => $this->faker->text(20),
        ];
    }
}
