@extends('Admin.layouts.index', ['title' => 'Mata Kuliah'])
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Mata Kuliah</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active">
                        <a href="#">Dashboard</a>
                    </div>
                    <div class="breadcrumb-item">
                        Mata Kuliah
                    </div>
                </div>
            </div>

            <div class="section-body">

                <div class="row">
                    <div class="col-md-12 ">
                        <div class="card">
                            <div class="card-header">
                                {{-- <h4>Simple</h4> --}}
                                <?php $i = $matkuls->firstItem(); ?>

                                <a href="{{ route('matkul.create') }}" class="btn btn-success">
                                    <span class="ion-plus"></span>
                                    Tambah Mata Kuliah
                                </a>
                            </div>
                            <div class="card-body">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama matakuliah</th>
                                            <th scope="col">Kode matakuliah</th>
                                            <th scope="col">Admin</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($matkuls as $matkul)
                                            <tr>
                                                <th scope="row">{{ $i++ }}</th>
                                                <td>{{ $matkul->nama_matkul }}</td>
                                                <td>{{ $matkul->kode_matkul }}</td>
                                                <td>{{ $matkul->id_admin }}</td>
                                                <td>
                                                    <form action="{{ route('matkul.destroy', $matkul->id_matkul) }}"
                                                        method="POST">
                                                        <a href="{{ route('matkul.edit', $matkul->id_matkul) }}"
                                                            class="btn btn-warning">Edit</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" id="swal-delete"
                                                            class="btn btn-danger">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6">Data tidak ada</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                                @if ($matkuls->hasPages())
                                    <div class="card-footer">
                                        {{ $matkuls->links() }}
                                    </div>
                                @endif
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection
