<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\BookReview;
use App\Models\Member;
use Illuminate\Database\Seeder;

class BookReviewSeeder extends Seeder
{
    public function run(): void
    {
        $bookIds = Book::pluck('id');
        $memberIds = Member::pluck('id');

        if ($bookIds->isEmpty() || $memberIds->isEmpty()) {
            return;
        }

        BookReview::factory(30)->create([
            'book_id' => fn () => $bookIds->random(),
            'member_id' => fn () => $memberIds->random(),
        ]);
    }
}
