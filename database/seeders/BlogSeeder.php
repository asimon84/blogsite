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
            'title' => 'Introduction',
            'thumb' => 'storage/images/blog/blog-thumb-1.png',
            'image' => '',
            'video' => '',
            'content' => 'This blog will contain random software engineering thoughts, code samples, and coding exercises. Feel free to peruse the topics, and watch any accompanying videos!',
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

        Blog::factory(10)->create();
    }
}
