<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('analisis_tanaman', function (Blueprint $table) {
            $table->id('id_hasil_analisis');
            $table->unsignedBigInteger('id_petani');
            $table->dateTime('tanggal_waktu_analisis');
            $table->string('gambar');
            $table->string('hasil_deteksi');
            $table->timestamps();

            // Perbaiki nama tabel referensi!
            $table->foreign('id_petani')->references('id_petani')->on('petanis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('analisis_tanaman');
    }
};
