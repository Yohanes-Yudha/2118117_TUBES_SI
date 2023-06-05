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
        Schema::create('tabel_gejala_penyakit', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('penyakit_id')->unsigned();
            $table->foreign('penyakit_id')->references('id_penyakit')->on('tabel_penyakit')->onDelete('cascade');
            $table->unsignedBigInteger('gejala_id')->unsigned();
            $table->foreign('gejala_id')->references('id_gejala')->on('tabel_gejala')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
