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
            'thumb' => 'storage/images/blog/blog-thumb-1.png',
            'image' => '',
            'video' => '',
            'content' => 'Some blog text.',
        ]);

        Blog::factory()->create([
            'title' => 'Second Blog',
            'thumb' => 'storage/images/blog/blog-thumb-1.png',
            'image' => '',
            'video' => '',
            'content' => 'Some blog text.',
        ]);

        Blog::factory()->create([
            'title' => 'Third Blog',
            'thumb' => 'storage/images/blog/blog-thumb-1.png',
            'image' => '',
            'video' => '',
            'content' => 'Some blog text.',
        ]);
    }
}
