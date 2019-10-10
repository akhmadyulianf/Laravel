<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\User;

class KategoriArtikel extends Model
{

    protected $table='kategori_artikel';

    protected $fillable=[
        'nama', 'users_id'
    ];

    protected $casts=[

    ];

}
