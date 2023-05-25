<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_admin',
        'id_dosen',
        'id_mahasiswa',
        'id_matkul',
        'hari_jadwal',
        'ruangan_jadwal',
        'jamMulai_jadwal',
        'jamSelesai_jadwal',
    ];

    public function dosen() {
        return $this->hasOne(Dosen::class, 'id', 'id_dosen' );
    }

    public function mahasiswa() {
        return $this->hasMany(Mahasiswa::class, 'id', 'id_mahasiswa' );
    }

    public function matkul() {
        return $this->hasMany(Matkul::class, 'id', 'id_matkul' );
    }
    
    public function admin() {
        return $this->hasOne(Admin::class, 'id', 'id_admin' );
    }

}
