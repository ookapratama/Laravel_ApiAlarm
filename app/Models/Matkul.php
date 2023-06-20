<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    use HasFactory;
    protected $table = 'data_matkuls';
    protected $primaryKey = 'id_matkul';
    protected $fillable = [
        'id_admin',
        'nama_matkul',
        'kode_matkul',
    ];

    public function admin() {
        return $this->hasOne(Admin::class, 'id', 'id_admin' );
    }

}
