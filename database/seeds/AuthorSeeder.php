<?php

use Illuminate\Database\Seeder;
use App\models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authors = config('author');

        foreach ($authors as $author) {
            $new_author = new Author();

            $new_author->fill($author);
            $new_author->save();
        }
    }
}
