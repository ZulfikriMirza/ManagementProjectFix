<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\AdminProject;

class AdminProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AdminProject::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'filename' => 'project_' . $this->faker->unique()->numberBetween(1, 4) . '.jpg',
            'heading' => $this->faker->text(20),
            'description' => $this->faker->text(100),
        ];
    }
}
