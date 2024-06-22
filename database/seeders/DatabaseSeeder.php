<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Review;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Book::factory(33)->create()->each(function ($book) {
            $reviews = random_int(5, 30);
            Review::factory()
                ->count($reviews)
                ->good()
                ->for($book)
                ->create();
        });
        Book::factory(33)->create()->each(function ($book) {
            $reviews = random_int(5, 30);
            Review::factory()
                ->count($reviews)
                ->average()
                ->for($book)
                ->create();
        });
        Book::factory(34)->create()->each(function ($book) {
            $reviews = random_int(5, 30);
            Review::factory()
                ->count($reviews)
                ->bad()
                ->for($book)
                ->create();
        });
    }
}
