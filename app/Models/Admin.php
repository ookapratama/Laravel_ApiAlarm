<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'data_admins';
    protected $primaryKey = 'id_admin';
    protected $fillable = [
        'username_admin',
        'password_admin',
    ];

    protected $hidden = [
        'password_admin',
    ];
}
