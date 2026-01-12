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
            'description' => 'This is a sample API written in Laravel 12 and PHP using RESTful standards. REST stands for REpresentational State Transfer, offering ways to make idempotent requests that will have the same effect no matter how many times they are called. Distrubuted systems and microservice architecture often utilize REST APIs to offer a window to the data layer that accessible across multiple application front ends. This API also contains a small admin portal built with Blade and Livewire. This allows easy viewing and reporting of data added or updated through the API. ',
        ]);

        Project::factory()->create([
            'name' => 'Task Scheduler',
            'repo' => 'https://github.com/asimon84/task-scheduler',
            'image' => 'storage/images/project/task-scheduler.png',
            'brief' => 'Drag and drop Task Scheduler',
            'description' => 'This is a very simple application demonstrating a drag and drop interface for a sample project task scheduler. It is meant to show more advanced javascript interactive functionality.',
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
