<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    protected $table = 'penyakits';
}

class SolusiPenyakit extends Model
{
    protected $table = 'solusi_penyakits';
}
