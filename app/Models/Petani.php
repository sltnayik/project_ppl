<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Petani extends Authenticatable
{
    protected $table = 'petanis';
    protected $primaryKey = 'id_petani';
    protected $fillable = [
        'nama_petani', 'nama_pengguna_petani', 'no_hp', 'password'
    ];
    protected $hidden = ['password'];
}
