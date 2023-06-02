<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $yearPublished = mt_rand(1900, date('Y'));

        return [
            'title' => fake()->sentence(),
            'author' => fake()->name(),
            'genre' => fake()->randomElement(['Fiction',
            'Non-fiction',
            'Mystery',
            'Thriller',
            'Romance',
            'Science Fiction',
            'Fantasy',
            'Biography',
            'History',
            'Crime',
            'Horror',
            'Adventure',
            'Self-help',
            'Poetry',
            'Drama',
            'Young Adult',
            "Children's",
            'Historical Fiction',
            'Comedy',
            'Memoir']),

            'year_published' => $yearPublished,
        ];
    }
}
