<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    protected $fillable = [
        'counter',
        'key'
    ];
    protected $table = "counter";
}
