<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $table='pengumuman';

    protected $fillabel=[
        'judul', 'isi', 'users_id'
    ];

    protected $casts=[

    ];
}
