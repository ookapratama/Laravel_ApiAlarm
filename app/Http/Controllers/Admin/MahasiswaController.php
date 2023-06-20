<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View as ViewView;

class MahasiswaController extends Controller
{
    public function index(): ViewView
    {
        $mahasiswas = Mahasiswa::latest()->paginate(5);

        return view('Admin.mahasiswa.index', compact('mahasiswas'));
    }

    public function create(): ViewView
    {
        return view('Admin.mahasiswa.tambah');
    }

    public function store(Request $request): RedirectResponse
    {

        $errors = $request->validate([
            'nim_mahasiswa'         => 'required',
            'nama_mahasiswa'        => 'required',
            'alamat_mahasiswa'      => 'required',
            'email_mahasiswa'       => 'required',
            'nohp_mahasiswa'       => 'required',
        ]);
        $data = $request->all();
        $data['id_admin'] = 1;
        // dd($data);
        Mahasiswa::create($data);

        return redirect()->route('mahasiswa.index')->with(['success' => 'Data berhasil disimpan']);
    }

    public function edit($id)
    {
        // dd("tes");
        $mahasiswa = Mahasiswa::where('id_mahasiswa', $id)->first();
        // dd($mahasiswa);
        return view('Admin.mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request): RedirectResponse
    {
        $mahasiswa = Mahasiswa::where('id_mahasiswa', $request->id)->first();
        // dd($mahasiswa);
        $data = [
            'nim_mahasiswa'         => $request->nim_mahasiswa,
            'nama_mahasiswa'        => $request->nama_mahasiswa,
            'alamat_mahasiswa'      => $request->alamat_mahasiswa,
            'email_mahasiswa'       => $request->email_mahasiswa,
            'nohp_mahasiswa'        => $request->nohp_mahasiswa,
        ];
        // dd($data);
        $mahasiswa->update($data);
        return redirect()->route('mahasiswa.index')->with(['update' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        // dd($id);
        $find = Mahasiswa::findOrFail($id);
        // dd($find);
        $find->delete();
        // return redirect()->route('mahasiswa.index')->with(['delete' => 'Data berhasil dihapus']);
        return back();
    }
}
