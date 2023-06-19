@extends('Admin.layouts.index', ['title' => 'Admin'])

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Admin</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active">
                        <a href="#">Dashboard</a>
                    </div>
                    <div class="breadcrumb-item">
                        <a href="{{ route('form.admin') }}">Admin</a>
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
                                            <label>Nama Admin</label>
                                            <input type="text" name="nama" value="Ooka" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="card-body col-md-4">
                                        <div class="form-group">
                                            <label>Password Lama</label>
                                            <input type="text" name="password_lama" class="form-control" />
                                        </div>
                                    </div>

                                </div>
                                <div class="row">

                                    <div class="col-md-4">

                                    </div>
                                    <div class="col-md-4">
                                       <div class="card-body">
                                          <div class="form-group">
                                              <label>Password Baru</label>
                                              <input type="text" name="password_baru" class="form-control" />
                                          </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="d-flex mx-3 mb-3">

                                    <button class="btn btn-success"> Update</button>
                                    <a href="{{ route('form.admin') }}" class="mx-3 btn btn-secondary"> Batal</a>
                                </div>
                            </form>
                        </div>

                    </div>
        </section>
    </div>
@endsection
