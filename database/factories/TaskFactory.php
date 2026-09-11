<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(4),
            'description' => fake()->paragraph(),
            'end_date' => fake()->dateTimeBetween('now', '+60 days')->format('Y-m-d'),
            'status' => fake()->boolean(35),
            'user_id' => User::factory(),
            'project_id' => Project::factory(),
        ];
    }
}
