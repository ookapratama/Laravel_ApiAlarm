<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'data_mahasiswas';
    protected $primaryKey = 'id_mahasiswa';
    protected $fillable = [
        'id_admin',
        'nim_mahasiswa',
        'nama_mahasiswa',
        'alamat_mahasiswa',
        'email_mahasiswa',
        'nohp_mahasiswa',
    ];

    public function admin() {
        return $this->hasOne(Admin::class, 'id', 'id_admin' );
    }
}
