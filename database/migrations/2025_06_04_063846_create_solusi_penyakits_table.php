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
        Schema::create('solusi_penyakits', function (Blueprint $table) {
            $table->id('id_solusi');
            $table->unsignedBigInteger('id_penyakit');
            $table->text('solusi');
            $table->timestamps();

            $table->foreign('id_penyakit')->references('id_penyakit')->on('penyakits')->onDelete('cascade');
        });

        Schema::table('solusi_penyakits', function (Blueprint $table) {
            $table->text('penyebab')->nullable();
            $table->text('gejala')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solusi_penyakits');
    }
};
