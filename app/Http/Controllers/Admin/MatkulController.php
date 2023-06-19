<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MatkulController extends Controller
{
    public function index() {
        return view('Admin.matakuliah.index');
    }

    public function tambah() {
        return view('Admin.matakuliah.tambah');
    }

    public function edit() {
        return view('Admin.matakuliah.edit');
    }
}
