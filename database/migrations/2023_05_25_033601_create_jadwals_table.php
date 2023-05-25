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
        Schema::create('data_jadwals', function (Blueprint $table) {
            $table->id('id_jadwal');
            $table->integer('id_dosen');
            $table->integer('id_mahasiswa');
            $table->integer('id_admin');
            $table->integer('id_matkul');
            $table->string('hari_jadwal');
            $table->string('ruangan_jadwal');
            $table->time('jamMulai_jadwal');
            $table->time('jamSelesai_jadwal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwals');
    }
};
