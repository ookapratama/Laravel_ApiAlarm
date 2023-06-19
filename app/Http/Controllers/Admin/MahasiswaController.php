<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index() {
        return view('Admin.mahasiswa.index');
    }

    public function tambah() {
        return view('Admin.mahasiswa.tambah');
    }

    public function edit() {
        return view('Admin.mahasiswa.edit');
    }
}
