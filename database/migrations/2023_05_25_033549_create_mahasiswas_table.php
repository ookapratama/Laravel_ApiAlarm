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
        Schema::create('data_mahasiswas', function (Blueprint $table) {
            $table->id('id_mahasiswa');
            $table->integer('id_admin');
            $table->string('nim_mahasiswa');
            $table->string('nama_mahasiswa');
            $table->string('alamat_mahasiswa');
            $table->string('email_mahasiswa');
            $table->string('nohp_mahasiswa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
