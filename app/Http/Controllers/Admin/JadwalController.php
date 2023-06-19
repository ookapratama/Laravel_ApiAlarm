<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index() {
        return view('Admin.jadwal.index');
    }

    public function tambah() {
        return view('Admin.jadwal.tambah');
    }

    public function edit() {
        return view('Admin.jadwal.edit');
    }
}
