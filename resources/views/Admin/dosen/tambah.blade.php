@extends('Admin.layouts.index', ['title' => 'Dosen'])

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Dosen</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active">
                        <a href="#">Dashboard</a>
                    </div>
                    <div class="breadcrumb-item">
                        <a href="{{ route('dosen.index') }}">Dosen</a>
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
                            <form action="">

                                <div class="row">

                                    <div class="card-body col-md-4">
                                        <div class="form-group">
                                            <label>Nama Dosen</label>
                                            <input type="text" name="nama" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="card-body col-md-4">
                                        <div class="form-group">
                                            <label>NIDN</label>
                                            <input type="text" name="nim" class="form-control" onkeypress="return (event.charCode != 8 && event.charCode == 0 || (event.charCode >= 48 && event.charCode <=57))" maxlength="10" />
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card-body ">
                                            <div class="form-group">
                                                <label>No Hp</label>
                                                <input type="text" name="no_hp" class="form-control" onkeypress="return (event.charCode != 8 && event.charCode == 0 || (event.charCode >= 48 && event.charCode <=57))" maxlength="12" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex mx-3 mb-3">

                                    <button class="btn btn-success"> Tambah</button>
                                    <a href="{{ route('dosen.index') }}" class="mx-3 btn btn-secondary"> Batal</a>
                                </div>
                            </form>
                        </div>

                    </div>
        </section>
    </div>
@endsection
