<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Review;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Book::factory(33)->create()->each(function ($book) {
            // You can perform actions with each $book instance here
            $numReviews = random_int(5,30);
            Review::factory()->count($numReviews)
            ->good()
            ->for($book)
            ->create();
        });

        // Ten kod utworzy 33 książki,  a każda z nich będzie miała od 5 do 30 recenzji.
        //Wygeneruje te recenzje, stworzy modele  i zapisze.
        // Następnie uruchomi tę nadrzędną metote o nazwie good, kt.óa poprostu ustawi oceny
        //nastepnie tworzy powiązanie z ksiązką poprzez ustawienie koollumny ID\
     //ksiazki, a nastepnie tworzy modele i natychmiast go zapisuje.

          Book ::factory(33)->create()->each(function ($book) {
            // You can perform actions with each $book instance here
            $numReviews = random_int(5,30);
            Review::factory()->count($numReviews)
            ->average()
            ->for($book)
            ->create();
        });


          Book ::factory(34)->create()->each(function ($book) {
            // You can perform actions with each $book instance here
            $numReviews = random_int(5,30);
            Review::factory()->count($numReviews)
            ->bad()
            ->for($book)
            ->create();
        });


        // User::factory(10)->create();

       // User::factory()->create([
    //        'name' => 'Test User',
      //      'email' => 'test@example.com',
     //   ]);
    }
}
