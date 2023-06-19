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
                        <a href="{{ route('index.matakuliah') }}">Mata Kuliah</a>
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
                                            <label>Nama Mata Kuliah</label>
                                            <input type="text" name="nama" value="Aplikasi Konsentrasi" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="card-body col-md-4">
                                        <div class="form-group">
                                            <label>Kode</label>
                                            <input type="text" name="kode" value="6TAPK-C" class="form-control" />
                                        </div>
                                    </div>

                                </div>
                                <div class="d-flex mx-3 mb-3">

                                    <button class="btn btn-success"> Edit</button>
                                    <a href="{{ route('index.matakuliah') }}" class="mx-3 btn btn-secondary"> Batal</a>
                                </div>
                            </form>
                        </div>

                    </div>
        </section>
    </div>
@endsection
