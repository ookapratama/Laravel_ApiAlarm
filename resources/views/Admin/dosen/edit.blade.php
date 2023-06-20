@extends('Admin.layouts.index', ['title' => 'Dosen'])

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Dosen</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active">
                        <a href="#">Dashboard</a>
                    </div>
                    <div class="breadcrumb-item">
                        <a href="{{ route('dosen.index') }}">Dosen</a>
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
                            <form action="{{ route('dosen.update') }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <input type="hidden" name="id" value="{{ $dosen->id_dosen }}">
                                    <div class="card-body col-md-4">
                                        <div class="form-group">
                                            <label>Nama Dosen</label>
                                            <input type="text" name="nama_dosen" value="{{ $dosen->nama_dosen }}"
                                                class="form-control @error('nama_dosen') is-invalid @enderror" />
                                            @error('nama_dosen')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="card-body col-md-4">
                                        <div class="form-group">
                                            <label>NIDN</label>
                                            <input type="text" name="nik_dosen" value="{{ $dosen->nik_dosen }}"
                                                class="form-control @error('nik_dosen') is-invalid @enderror"
                                                onkeypress="return (event.charCode != 8 && event.charCode == 0 || (event.charCode >= 48 && event.charCode <=57))"
                                                maxlength="10" />
                                            @error('nik_dosen')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card-body ">
                                            <div class="form-group">
                                                <label>No Hp</label>
                                                <input type="text" name="nohp_dosen" value="{{ $dosen->nohp_dosen }}"
                                                    class="form-control @error('nohp_dosen') is-invalid @enderror"
                                                    onkeypress="return (event.charCode != 8 && event.charCode == 0 || (event.charCode >= 48 && event.charCode <=57))"
                                                    maxlength="12" />
                                                @error('nohp_dosen')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex mx-3 mb-3">

                                    <button type="submit" class="btn btn-success"> Edit</button>
                                    <a href="{{ route('dosen.index') }}" class="mx-3 btn btn-secondary"> Batal</a>
                                </div>
                            </form>
                        </div>

                    </div>
        </section>
    </div>
@endsection
