@extends('Admin.layouts.index', ['title' => 'Mata Kuliah'])

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Mata Kuliah</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active">
                        <a href="#">Dashboard</a>
                    </div>
                    <div class="breadcrumb-item">
                        <a href="{{ route('matkul.index') }}">Mata Kuliah</a>
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
                            <form action="{{ route('matkul.store') }}" method="POST">
                                @csrf
                                <div class="row">

                                    <div class="card-body col-md-4">
                                        <div class="form-group">
                                            <label>Nama Mata Kuliah</label>
                                            <input type="text" name="nama_matkul"
                                                class="form-control @error('nama_matkul') is-invalid @enderror" />
                                            @error('nama_matkul')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="card-body col-md-4">
                                        <div class="form-group">
                                            <label>Kode</label>
                                            <input type="text" name="kode_matkul"
                                                class="form-control @error('kode_matkul') is-invalid @enderror" />
                                            @error('kode_matkul')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                                <div class="d-flex mx-3 mb-3">

                                    <button type="submit" class="btn btn-success"> Tambah</button>
                                    <a href="{{ route('matkul.index') }}" class="mx-3 btn btn-secondary"> Batal</a>
                                </div>
                            </form>
                        </div>

                    </div>
        </section>
    </div>
@endsection
