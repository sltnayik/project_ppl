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
        Schema::create('detail_solusi_penyakits', function (Blueprint $table) {
            $table->id('id_solusi_penyakit');
            $table->foreignId('id_solusi')->constrained('solusi_penyakits', 'id_solusi')->onDelete('cascade');
            $table->foreignId('id_penyakit')->constrained('penyakits', 'id_penyakit')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_solusi_penyakits');
    }
};
