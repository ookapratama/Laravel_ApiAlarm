<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DosenController extends Controller
{
    public function index(): View
    {
        $dosens = Dosen::latest()->paginate(5);

        return view('Admin.dosen.index', compact('dosens'));
    }

    public function create(): View
    {
        return view('Admin.dosen.tambah');
    }

    public function store(Request $request): RedirectResponse
    {
        // dd($request->nohp_dosen);
        $errors = $request->validate([
            'nik_dosen'         => 'required',
            'nama_dosen'        => 'required',
            'nohp_dosen'        => 'required',
        ]);
        $data = $request->all();
        $data['id_admin'] = 1;
        // dd($data);
        Dosen::create($data);

        return redirect()->route('dosen.index')->with(['success' => 'Data berhasil disimpan']);
    }

    public function edit($id)
    {
        // dd("tes");
        $dosen = Dosen::where('id_dosen', $id)->first();
        // dd($dosen);
        return view('Admin.dosen.edit', compact('dosen'));
    }

    public function update(Request $request): RedirectResponse
    {
        $dosen = Dosen::where('id_dosen', $request->id)->first();
        // dd($dosen);
        $data = [
            'nik_dosen'         => $request->nik_dosen,
            'nama_dosen'        => $request->nama_dosen,
            'nohp_dosen'        => $request->nohp_dosen,
        ];
        // dd($data);
        $dosen->update($data);
        return redirect()->route('dosen.index')->with(['update' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        // dd($id);
        $find = Dosen::findOrFail($id);
        // dd($find);
        $find->delete();
        // return redirect()->route('dosen.index')->with(['delete' => 'Data berhasil dihapus']);
        return back();
    }
}
