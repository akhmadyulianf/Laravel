<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table='artikel';

    protected $fillabel=[
        'judul', 'isi', 'users_id'
    ];

    protected $casts=[

    ];
}
