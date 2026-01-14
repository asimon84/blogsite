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
            'author' => 'Alexander Simon',
            'category' => 'General',
            'thumb' => 'storage/images/blog/blog-thumb-1.png',
            'image' => 'storage/images/blog/blog-details-1.png',
            'video' => '',
            'content' => '<p>Welcome!</p><p>This blog will contain random software engineering thoughts, code samples, and coding exercises. Feel free to peruse the topics, and watch any accompanying videos!</p>',
        ]);

        Blog::factory()->create([
            'title' => 'Second Blog',
            'author' => 'Alexander Simon',
            'category' => 'General',
            'thumb' => 'storage/images/blog/blog-thumb-1.png',
            'image' => 'storage/images/blog/blog-details-1.png',
            'video' => '',
            'content' => 'Some blog text.',
        ]);

        Blog::factory()->create([
            'title' => 'Third Blog',
            'author' => 'Alexander Simon',
            'category' => 'General',
            'thumb' => 'storage/images/blog/blog-thumb-1.png',
            'image' => 'storage/images/blog/blog-details-1.png',
            'video' => '',
            'content' => 'Some blog text.',
        ]);

        Blog::factory(10)->create();
    }
}
