<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DaftarPemilih extends Model
{
    protected $fillable = [
        'nama_pemilih',
        'nim',
        'counter'
    ];
    protected $table = 'daftarpemilihs';
    public function getRouteKeyName()
    {
        return 'pemilih';
    }
}
