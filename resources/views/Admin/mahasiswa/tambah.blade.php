@extends('Admin.layouts.index', ['title' => 'Mahasiswa'])

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Mahasiswa</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active">
                        <a href="#">Dashboard</a>
                    </div>
                    <div class="breadcrumb-item">
                        <a href="{{ route('mahasiswa.index') }}">Mahasiswa</a>
                    </div>
                    <div class="breadcrumb-item">Tambah</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Tambah</h4>
                            </div>
                            <form action="{{ route('mahasiswa.store') }}" method="POST">
                                @csrf
                                <div class="row">

                                    <div class="card-body col-md-4">
                                        <div class="form-group">
                                            <label>Nama Mahasiswa</label>
                                            <input type="text" name="nama_mahasiswa" 
                                                class="form-control @error('nama_mahasiswa') is-invalid @enderror" />
                                            @error('nama_mahasiswa')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="card-body col-md-4">
                                        <div class="form-group">
                                            <label>Nim</label>
                                            <input type="text" name="nim_mahasiswa"
                                                class="form-control @error('nim_mahasiswa') is-invalid @enderror" onkeypress="return (event.charCode != 8 && event.charCode == 0 || (event.charCode >= 48 && event.charCode <=57))" maxlength="6" />
                                            @error('nim_mahasiswa')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="card-body col-md-4">
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text" name="alamat_mahasiswa"
                                                class="form-control @error('alamat_mahasiswa') is-invalid @enderror" />
                                            @error('alamat_mahasiswa')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="card-body ">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" name="email_mahasiswa"
                                                    class="form-control @error('email_mahasiswa') is-invalid @enderror" />
                                                @error('email_mahasiswa')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card-body ">
                                            <div class="form-group">
                                                <label>No Hp</label>
                                                <input type="text" name="nohp_mahasiswa"
                                                    class="form-control @error('nohp_mahasiswa') is-invalid @enderror" onkeypress="return (event.charCode != 8 && event.charCode == 0 || (event.charCode >= 48 && event.charCode <=57))" maxlength="12" />
                                                @error('nohp_mahasiswa')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex mx-3 mb-3">

                                    <button class="btn btn-success"> Tambah</button>
                                    <a href="{{ route('mahasiswa.index') }}" class="mx-3 btn btn-secondary"> Batal</a>
                                </div>
                            </form>
                        </div>

                    </div>
        </section>
    </div>
@endsection
