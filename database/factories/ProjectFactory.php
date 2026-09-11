<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Project>
 */
class ProjectFactory extends Factory
{
    protected $model = Project::class;

    public function definition(): array
    {
        return [
            'name' => fake()->catchPhrase(),
            'costs' => fake()->randomFloat(2, 500, 25000),
            'time' => fake()->numberBetween(7, 120),
            'manager_id' => User::factory(),
        ];
    }
}