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
                        <a href="{{ route('index.mahasiswa') }}">Mahasiswa</a>
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

                                    <div class="card-body col-md-4">
                                        <div class="form-group">
                                            <label>Nama Mahasiswa</label>
                                            <input type="text" name="nama" value="lorem" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="card-body col-md-4">
                                        <div class="form-group">
                                            <label>Nim</label>
                                            <input type="text" name="nim" value="2020" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="card-body col-md-4">
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text" name="alamat" value="lorem" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="card-body ">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" name="email" value="lorem@gmail.com" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card-body ">
                                            <div class="form-group">
                                                <label>No Hp</label>
                                                <input type="text" name="no_hp" value="0812" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex mx-3 mb-3">

                                    <button class="btn btn-success"> Update</button>
                                    <a href="{{ route('index.mahasiswa') }}" class="mx-3 btn btn-secondary"> Batal</a>
                                </div>
                            </form>
                        </div>

                    </div>
        </section>
    </div>
@endsection
