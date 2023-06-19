<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index() {
        return view('Admin.dosen.index');
    }
    public function tambah() {
        return view('Admin.dosen.tambah');
    }
    public function edit() {
        return view('Admin.dosen.edit');
    }
}
