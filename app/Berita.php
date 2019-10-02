<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table='berita';

    protected $fillabel=[
        'judul', 'isi', 'users_id'
    ];

    protected $casts=[

    ];
}
