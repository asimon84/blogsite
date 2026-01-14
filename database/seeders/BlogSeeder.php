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
            'content' => '<p class="blog-text">Welcome!</p>
                <p class="blog-text">This blog will contain random software engineering thoughts, code samples, and coding exercises. Feel free to peruse the topics, and watch any accompanying videos!</p>
                <blockquote>
                    <img src="./../storage/images/icons/blockquote.svg" alt="blockquote"/>
                    <div class="text">
                        <p>
                            “Any fool can write code that a computer can understand. Good programmers write code that humans can understand”
                        </p>
                        <cite>─ Doug Linder</cite>
                    </div>
                </blockquote>
                ',
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
