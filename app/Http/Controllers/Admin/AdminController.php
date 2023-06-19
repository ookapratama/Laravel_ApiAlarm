<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('Admin.dashboard');
    }

    public function form() {
        return view('Admin.admin.index');
    }

    public function tambah() {
        return view('Admin.admin.tambah');
    }

    public function edit() {
        return view('Admin.admin.edit');
    }
}
