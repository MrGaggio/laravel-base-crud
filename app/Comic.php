<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{   

    // il fillable serve per passare tutti i dati in massa in una sola volta (tramite array)
    protected $fillable = [
        'author',
        'publisher',
        'page_number',
        'relase',
        'price',
        'photo'
    ];
}
