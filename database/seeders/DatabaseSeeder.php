<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => 'password',
        ]);

        $user = User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
        ]);

        $websiteProject = Project::create([
            'name' => 'Company Website',
            'costs' => 12000.00,
            'time' => 60,
            'manager_id' => $admin->id,
        ]);

        $mobileProject = Project::create([
            'name' => 'Mobile Application',
            'costs' => 25000.00,
            'time' => 120,
            'manager_id' => $admin->id,
        ]);

        Task::create([
            'title' => 'Create homepage layout',
            'description' => 'Build the responsive homepage layout.',
            'end_date' => '2026-09-20',
            'status' => false,
            'user_id' => $user->id,
            'project_id' => $websiteProject->id,
        ]);

        Task::create([
            'title' => 'Configure authentication',
            'description' => 'Set up login and registration for the application.',
            'end_date' => '2026-09-25',
            'status' => true,
            'user_id' => $admin->id,
            'project_id' => $mobileProject->id,
        ]);
    }
}
