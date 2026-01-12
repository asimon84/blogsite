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
            'repo' => 'https://github.com/asimon84/rest-api',
            'image' => 'storage/images/project/rest-api.png',
            'brief' => 'Simple REST API and Client Portal',
            'description' => '',
        ]);

        Project::factory()->create([
            'name' => 'Task Scheduler',
            'repo' => 'https://github.com/asimon84/task-scheduler',
            'image' => 'storage/images/project/task-scheduler.png',
            'brief' => 'Drag and drop Task Scheduler',
            'description' => '',
        ]);

        Project::factory()->create([
            'name' => 'Laravel CRM (Blade/Livewire)',
            'repo' => 'https://github.com/asimon84/laravel-crm-livewire',
            'image' => 'storage/images/project/crm-livewire.png',
            'brief' => 'Laravel based CRM with Blade/Livewire frontend',
            'description' => '',
        ]);

        Project::factory()->create([
            'name' => 'Laravel CRM (React)',
            'repo' => 'https://github.com/asimon84/laravel-crm-react',
            'image' => 'storage/images/project/crm-react.png',
            'brief' => 'Laravel based CRM with React frontend',
            'description' => '',
        ]);

        Project::factory()->create([
            'name' => 'Laravel CRM (Vue.js)',
            'repo' => 'https://github.com/asimon84/laravel-crm-vue',
            'image' => 'storage/images/project/crm-vue.png',
            'brief' => 'Laravel based CRM with Vue.js frontend',
            'description' => '',
        ]);

        Project::factory()->create([
            'name' => 'Laravel AI',
            'repo' => 'https://github.com/asimon84/laravel-ai',
            'image' => 'storage/images/project/laravel-ai.png',
            'brief' => 'Laravel based AI/ML test project',
            'description' => '',
        ]);
    }
}
