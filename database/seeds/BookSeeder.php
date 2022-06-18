<?php

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // istanzio variabile uguale a database importato in config
        $books = config('books');

        foreach ($books as $book) {
           $new_book = new Book();
           
           $new_book->fill($book);
           $new_book->save();
        }
    }
}
