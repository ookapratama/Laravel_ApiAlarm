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
                                <a href="{{ route('tambah.mahasiswa') }}" class="btn btn-success">
                                    <span class="ion-plus"></span>
                                    Tambah Mahasiswa
                                </a>
                            </div>
                            <div class="card-body">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Nim</th>
                                            <th scope="col">Username</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">No Hp</th>
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
                                                <td>202249</td>
                                                <td>ooka pratama</td>
                                                <td>ANtang</td>
                                                <td>ooka@gmail.com</td>
                                                <td>08192382</td>
                                                <td>Admin</td>
                                                <td>
                                                    <a href="{{ route('edit.mahasiswa') }}" class="btn btn-warning">Edit</a> <a href=""
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
