<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = [
        'label', 'color'
    ];

    public function book() {
        return $this->belongsToMany('App\Models\Book');
      }
}
