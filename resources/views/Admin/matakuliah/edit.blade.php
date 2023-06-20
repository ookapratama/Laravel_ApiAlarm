@extends('Admin.layouts.index', ['title' => 'Mata Kuliah'])

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Mata Kuliah</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active">
                        <a href="#">Dashboard</a>
                    </div>
                    <div class="breadcrumb-item">
                        <a href="{{ route('matkul.index') }}">Mata Kuliah</a>
                    </div>
                    <div class="breadcrumb-item">Edit</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Edit</h4>
                            </div>
                            <form action="{{ route('matkul.update') }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <input type="hidden" name="id" value="{{ $matkul->id_matkul }}">
                                    <div class="card-body col-md-4">
                                        <div class="form-group">
                                            <label>Nama Mata Kuliah</label>
                                            <input type="text" name="nama_matkul" value="{{ $matkul->nama_matkul }}"
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
                                            <input type="text" name="kode_matkul" maxlength="7" value="{{ $matkul->kode_matkul }}"
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

                                    <button type="submit" class="btn btn-success"> Update</button>
                                    <a href="{{ route('matkul.index') }}" class="mx-3 btn btn-secondary"> Batal</a>
                                </div>
                            </form>
                        </div>

                    </div>
        </section>
    </div>
@endsection
