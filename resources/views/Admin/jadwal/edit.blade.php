@extends('Admin.layouts.index', ['title' => 'Jadwal'])

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Jadwal</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active">
                        <a href="#">Dashboard</a>
                    </div>
                    <div class="breadcrumb-item">
                        <a href="{{ route('index.jadwal') }}">Jadwal</a>
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
                            <form action="">

                                <div class="row">

                                    <div class="card-body col-md-2">
                                        <div class="form-group">
                                            <label>Hari Jadwal</label>
                                            <select class="form-control" name="hari" id="">
                                                <option value="">Senin</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="card-body col-md-3">
                                        <div class="form-group">
                                            <label>Matakuliah</label>
                                            <select class="form-control" name="matakuliah" id="">
                                                <option value="">Senin</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="card-body col-md-2">
                                        <div class="form-group">
                                            <label>Ruangan</label>
                                            <input type="text" name="ruangan" class="form-control">
                                        </div>
                                    </div>

                                    <div class="card-body col-md-2">
                                        <div class="form-group">
                                            <label>Jam Mulai</label>
                                            <input type="time" name="jam_mulai" class="form-control">
                                        </div>
                                    </div>

                                    <div class="card-body col-md-2">
                                        <div class="form-group">
                                            <label>Jam Selesai</label>
                                            <input type="time" name="jam_selesai" class="form-control">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="card-body col-md-3">
                                        <div class="form-group">
                                            <label>Nama Mahasiswa</label>
                                            <select class="form-control" name="nama_mahasiswa" id="">
                                                <option value="">Ooka PRatama</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="card-body col-md-3">
                                        <div class="form-group">
                                            <label>Nama Dosen</label>
                                            <select class="form-control" name="nama_dosen" id="">
                                                <option value="">Ardimansyah</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>




                                <div class="d-flex mx-3 mb-3">

                                    <button class="btn btn-success"> Update</button>
                                    <a href="{{ route('index.jadwal') }}" class="mx-3 btn btn-secondary"> Batal</a>
                                </div>
                            </form>
                        </div>

                    </div>
        </section>
    </div>
@endsection
