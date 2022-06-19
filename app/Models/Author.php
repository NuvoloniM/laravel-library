<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'name', 'life_story', 'author_year', 'where',
    ];

      // funzion che mi collega le tabelle
    // essendo 1 autore + libri -> questa è la tabella principale
    public function Book(){
        return $this->hasMany('App\Models\Book');
    }
}
