<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $table = 'admins';
    protected $primaryKey = 'id_admin';
    protected $fillable = [
        'nama_admin', 'nama_pengguna_admin', 'password'
    ];
    protected $hidden = ['password'];
}
