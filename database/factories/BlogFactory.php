<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => Str::random(15) . ' Blog',
            'author' => 'Alexander Simon',
            'category' => 'General',
            'thumb' => 'storage/images/blog/blog-thumb-1.png',
            'image' => 'storage/images/blog/blog-details-1.png',
            'video' => '',
            'content' => fake()->text(),
        ];
    }
}
