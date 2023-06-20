<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function index(): View
    {
        $admins = Admin::latest()->paginate(5);

        return view('Admin.admin.index', compact('admins'));
    }

    public function create(): View
    {
        return view('Admin.admin.tambah');
    }

    public function store(Request $request): RedirectResponse
    {
        // dd($request->nohp_admin);
        $errors = $request->validate([
            'username_admin'         => 'required',
            'password_admin'         => 'required',
        ]);
        $data = $request->all();
        // dd($data);
        Admin::create($data);

        return redirect()->route('admin.index')->with(['success' => 'Data berhasil disimpan']);
    }

    public function edit($id)
    {
        // dd("tes");
        $admin = Admin::where('id_admin', $id)->first();


        return view('Admin.admin.edit', compact('admin'));
    }

    public function update(Request $request): RedirectResponse
    {
        $admin = Admin::where('id_admin', $request->id)->first();
        // dd($admin);
        $data = [
            'username_admin'         => $request->username_admin,
            'password_admin'         => $request->password_admin,
        ];
        if ($data['password_admin'] != $admin->password_admin) {
            return back()->with(['error-password' => 'Password lama tidak valid']);
        }

        $admin->update($data);
        return redirect()->route('admin.index')->with(['update' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        // dd($id);
        $find = Admin::findOrFail($id);
        // dd($find);
        $find->delete();
        // return redirect()->route('admin.index')->with(['delete' => 'Data berhasil dihapus']);
        return back();
    }
}
