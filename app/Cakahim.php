<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cakahim extends Model
{
    protected $fillable = [
        'namapasangan',
        'namakahim',
        'nimkahim',
        'namawakahim',
        'nimwakahim',
        'motto',
        'img-cakahim'
    ];
    protected $table = 'cakahim';
}
