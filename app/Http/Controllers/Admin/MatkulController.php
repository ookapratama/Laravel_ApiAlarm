<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Matkul;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MatkulController extends Controller
{
    public function index(): View
    {
        $dosens = Matkul::latest()->paginate(5);

        return view('Admin.matkul.index', compact('dosens'));
    }

    public function create(): View
    {
        return view('Admin.matkul.tambah');
    }

    public function store(Request $request): RedirectResponse
    {
        // dd($request->nohp_dosen);
        $errors = $request->validate([
            'nama_matkul'         => 'required',
            'kode_matkul'        => 'required',
        ]);
        $data = $request->all();
        $data['id_admin'] = 1;
        // dd($data);
        Matkul::create($data);

        return redirect()->route('matkul.index')->with(['success' => 'Data berhasil disimpan']);
    }

    public function edit($id)
    {
        // dd("tes");
        $matkul = Matkul::where('id_dosen', $id)->first();
        // dd($matkul);
        return view('Admin.matkul.edit', compact('matkul'));
    }

    public function update(Request $request): RedirectResponse
    {
        $matkul = Matkul::where('id_dosen', $request->id)->first();
        // dd($matkul);
        $data = [
            'nik_dosen'         => $request->nik_dosen,
            'RedirectResponse'        => $request->nama_dosen,
            'nohp_dosen'        => $request->nohp_dosen,
        ];
        // dd($data);
        $matkul->update($data);
        return redirect()->route('matkul.index')->with(['update' => 'Data Berhasil Diubah']);
    }

    public function destroy($id): RedirectResponse
    {
        // dd($id);
        $find = Matkul::findOrFail($id);
        // dd($find);
        $find->delete();
        // return redirect()->route('matkul.index')->with(['delete' => 'Data berhasil dihapus']);
        return back();
    }
}
