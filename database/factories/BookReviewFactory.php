<?php

namespace Database\Factories;

use App\Models\BookReview;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<BookReview>
 */
class BookReviewFactory extends Factory
{
    protected $model = BookReview::class;

    public function definition(): array
    {
        return [
            'book_id' => null,
            'member_id' => null,
            'rating' => fake()->numberBetween(1, 5),
            'title' => ucfirst(fake()->sentence()),
            'body' => fake()->paragraph(),
        ];
    }
}
