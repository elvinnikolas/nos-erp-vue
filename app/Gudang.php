<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    protected $table = 'lokasi';

    protected $fillable = [
        'KodeLokasi','NamaLokasi','Tipe'
    ];

    protected $primaryKey = 'KodeLokasi'; // or null

    public $incrementing = false;
}