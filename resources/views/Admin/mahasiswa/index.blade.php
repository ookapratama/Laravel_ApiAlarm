@extends('Admin.layouts.index', ['title' => 'Mahasiswa'])
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Mahasiswa</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active">
                        <a href="#">Dashboard</a>
                    </div>
                    <div class="breadcrumb-item">
                        Mahasiswa
                    </div>
                </div>
            </div>

            <div class="section-body">

                <div class="row">
                    <div class="col-md-12 ">
                        <div class="card">
                            <div class="card-header">
                                {{-- <h4>Simple</h4> --}}
                                <?php $i = $mahasiswas->firstItem(); ?>

                                <a href="{{ route('mahasiswa.create') }}" class="btn btn-success">
                                    <span class="ion-plus"></span>
                                    Tambah Mahasiswa
                                </a>
                            </div>
                            <div class="card-body">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Nim</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">No Hp</th>
                                            <th scope="col">Admin</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($mahasiswas as $mhs)
                                            <tr>
                                                <th scope="row">{{ $i++ }}</th>
                                                <td>{{ $mhs->nama_mahasiswa }}</td>
                                                <td>{{ $mhs->nim_mahasiswa }}</td>
                                                <td>{{ $mhs->alamat_mahasiswa }}</td>
                                                <td>{{ $mhs->email_mahasiswa }}</td>
                                                <td>{{ $mhs->nohp_mahasiswa }}</td>
                                                <td>{{ $mhs->id_admin }}</td>
                                                <td>
                                                    <form action="{{ route('mahasiswa.destroy', $mhs->id_mahasiswa) }}"
                                                        method="POST">
                                                        <a href="{{ route('mahasiswa.edit', $mhs->id_mahasiswa) }}"
                                                            class="btn btn-warning">Edit</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" id="swal-delete" class="btn btn-danger">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td class="" colspan="9">Data mahasiswa tidak ada</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                                @if ($mahasiswas->hasPages())
                                    <div class="card-footer">
                                        {{ $mahasiswas->links() }}
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
