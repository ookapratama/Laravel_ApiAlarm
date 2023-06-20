<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $table = 'data_dosens';
    protected $primaryKey = 'id_dosen';
    protected $fillable = [
        'id_admin',
        'nama_dosen',
        'nik_dosen',
        'nohp_dosen',
    ];
    
    public function admin() {
        return $this->hasOne(Admin::class, 'id', 'id_admin' );
    }
}
