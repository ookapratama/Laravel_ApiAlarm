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
                                <a href="{{ route('tambah.matakuliah') }}" class="btn btn-success">
                                    <span class="ion-plus"></span>
                                    Tambah Mata Kuliah
                                </a>
                            </div>
                            <div class="card-body">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Kode</th>
                                            <th scope="col">Admin</th>
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
                                                <td>Ooka PRatama</td>
                                                <td>6TAPK-C</td>
                                                <td>Admin</td>
                                                <td>
                                                    <a href="{{ route('edit.matakuliah') }}" class="btn btn-warning">Edit</a> <a href=""
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
