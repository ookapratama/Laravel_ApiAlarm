@extends('Admin.layouts.index', ['title' => 'Mahasiswa'])

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Mahasiswa</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active">
                        <a href="#">Dashboard</a>
                    </div>
                    <div class="breadcrumb-item">
                        <a href="{{ route('mahasiswa.index') }}">Mahasiswa</a>
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
                            <form action="{{ route('mahasiswa.update') }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <input type="hidden" name="id" value="{{ $mahasiswa->id_mahasiswa }}">
                                    <div class="card-body col-md-4">
                                        <div class="form-group">
                                            <label>Nama Mahasiswa</label>
                                            <input type="text" name="nama_mahasiswa" value="{{ $mahasiswa->nama_mahasiswa }}" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="card-body col-md-4">
                                        <div class="form-group">
                                            <label>Nim</label>
                                            <input type="text" name="nim_mahasiswa" value="{{ $mahasiswa->nim_mahasiswa }}" class="form-control" onkeypress="return (event.charCode != 8 && event.charCode == 0 || (event.charCode >= 48 && event.charCode <=57))" maxlength="6" />
                                        </div>
                                    </div>
                                    <div class="card-body col-md-4">
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text" name="alamat_mahasiswa" value="{{ $mahasiswa->alamat_mahasiswa }}" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="card-body ">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" name="email_mahasiswa" value="{{ $mahasiswa->email_mahasiswa }}" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card-body ">
                                            <div class="form-group">
                                                <label>No Hp</label>
                                                <input type="text" name="nohp_mahasiswa" value="{{ $mahasiswa->nohp_mahasiswa }}" class="form-control" onkeypress="return (event.charCode != 8 && event.charCode == 0 || (event.charCode >= 48 && event.charCode <=57))" maxlength="12" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex mx-3 mb-3">

                                    <button type="submit" class="btn btn-success"> Update</button>
                                    <a href="{{ route('mahasiswa.index') }}" class="mx-3 btn btn-secondary"> Batal</a>
                                </div>
                            </form>
                        </div>

                    </div>
        </section>
    </div>
@endsection
