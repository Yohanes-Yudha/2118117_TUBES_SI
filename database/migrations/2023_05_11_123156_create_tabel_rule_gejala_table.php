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
        Schema::create('tabel_rule_gejala', function (Blueprint $table) {
            $table->id('id_rule');
            $table->unsignedBigInteger('gejala_id');
            $table->unsignedBigInteger('penyakit_id');
            $table->string('kode_aturan');
            $table->string('deskripsi');
            $table->timestamps();
            
            $table->foreign('gejala_id')->references('id_gejala')->on('tabel_gejala')->onDelete('cascade');
            $table->foreign('penyakit_id')->references('id_penyakit')->on('tabel_penyakit')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_rule_gejala');
    }
};
