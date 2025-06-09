<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnalisisTanaman extends Model
{
    protected $table = 'analisis_tanaman';
    protected $primaryKey = 'id_hasil_analisis';
    protected $fillable = [
        'id_petani', 'tanggal_waktu_analisis', 'gambar', 'hasil_deteksi', 'keterangan'
    ];

    public function petani()
    {
        return $this->belongsTo(\App\Models\Petani::class, 'id_petani', 'id_petani');
    }
}
