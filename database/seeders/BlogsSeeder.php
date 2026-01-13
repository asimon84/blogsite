<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::factory()->create([
            'title' => 'First Blog',
            'thumb' => '',
            'image' => '',
            'video' => '',
            'content' => 'Some blog text.',
        ]);
    }
}
