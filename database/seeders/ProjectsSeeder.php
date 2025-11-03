<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::factory()->create([
            'name' => 'RESTful API',
            'repo_link' => 'https://github.com/asimon84/rest-api',
        ]);

        Project::factory()->create([
            'name' => 'Task Scheduler',
            'repo_link' => 'https://github.com/asimon84/task-scheduler',
        ]);

        Project::factory()->create([
            'name' => 'Laravel CRM (Blade/Livewire)',
            'repo_link' => 'https://github.com/asimon84/laravel-crm-livewire',
        ]);

        Project::factory()->create([
            'name' => 'Laravel CRM (React)',
            'repo_link' => 'https://github.com/asimon84/laravel-crm-react',
        ]);

        Project::factory()->create([
            'name' => 'Laravel CRM (Vue.js)',
            'repo_link' => 'https://github.com/asimon84/laravel-crm-vue',
        ]);
    }
}
