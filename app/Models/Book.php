<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title', 'image', 'edition_year', 'description',
    ];

    // creo funzion che mi dice in che relazione è con una tabella
    // visto che 1 autore può avere più libri questo model è secondario
    public function Author(){
        return $this->belongsTo('App\Models\Author');
    }
}
