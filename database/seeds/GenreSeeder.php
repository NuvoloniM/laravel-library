<?php

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = config('genres');

        foreach ($genres as $genre) {
            $new_genre = new Genre();

            $new_genre->fill($genre);
            $new_genre->save();
        }
    }
}
