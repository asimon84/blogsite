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
            'image' => 'storage/images/project/portfolio-gallery-1.png',
            'brief' => 'Simple REST API and Client Portal',
        ]);

        Project::factory()->create([
            'name' => 'Task Scheduler',
            'repo' => 'https://github.com/asimon84/task-scheduler',
            'image' => 'storage/images/project/portfolio-gallery-1.png',
            'brief' => 'Drag and drop Task Scheduler',
        ]);

        Project::factory()->create([
            'name' => 'Laravel CRM (Blade/Livewire)',
            'repo' => 'https://github.com/asimon84/laravel-crm-livewire',
            'image' => 'storage/images/project/portfolio-gallery-1.png',
            'brief' => 'Laravel based CRM with Blade/Livewire frontend',
        ]);

        Project::factory()->create([
            'name' => 'Laravel CRM (React)',
            'repo' => 'https://github.com/asimon84/laravel-crm-react',
            'image' => 'storage/images/project/portfolio-gallery-1.png',
            'brief' => 'Laravel based CRM with React frontend',
        ]);

        Project::factory()->create([
            'name' => 'Laravel CRM (Vue.js)',
            'repo' => 'https://github.com/asimon84/laravel-crm-vue',
            'image' => 'storage/images/project/portfolio-gallery-1.png',
            'brief' => 'Laravel based CRM with Vue.js frontend',
        ]);
    }
}
