@extends('Admin.layouts.index', ['title' => 'Jadwal'])
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Jadwal</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active">
                        <a href="#">Dashboard</a>
                    </div>
                    <div class="breadcrumb-item">
                        Jadwal
                    </div>
                </div>
            </div>

            <div class="section-body">

                <div class="row">
                    <div class="col-md-12 ">
                        <div class="card">
                            <div class="card-header">
                                {{-- <h4>Simple</h4> --}}
                                <a href="{{ route('tambah.jadwal') }}" class="btn btn-success">
                                    <span class="ion-plus"></span>
                                    Tambah Jadwal
                                </a>
                            </div>
                            <div class="card-body">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nim</th>
                                            <th scope="col">Matakuliah</th>
                                            <th scope="col">Nama Dosen</th>
                                            <th scope="col">Hari</th>
                                            <th scope="col">Ruangan</th>
                                            <th scope="col">Jam Mulai</th>
                                            <th scope="col">Jam Selesai</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (null != null)
                                            <tr>
                                                <td colspan="7">Data tidak ada</td>
                                            </tr>
                                        @else
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>202249</td>
                                                <td>Aplikasi Konsentrasi</td>
                                                <td>Ardimansyah</td>
                                                <td>Senin</td>
                                                <td>A109</td>
                                                <td>11.00</td>
                                                <td>12.30</td>
                                                <td>
                                                    <a href="{{ route('edit.jadwal') }}" class="btn btn-warning">Edit</a> <a href=""
                                                        class="btn btn-danger">Hapus</a>
                                                </td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection
