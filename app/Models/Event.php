<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $cast = [
        'items' => 'array'
    ];

    protected $dates = ['date'];
}
