@extends('Admin.layouts.index', ['title' => 'Admin'])

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Update Admin</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active">
                        <a href="#">Dashboard</a>
                    </div>
                    <div class="breadcrumb-item">
                        <a href="{{ route('admin.index') }}">Admin</a>
                    </div>
                    <div class="breadcrumb-item">Update</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Update</h4>
                            </div>
                            <form action="{{ route('admin.update') }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <input type="hidden" name="id" value="{{ $admin->id_admin }}">
                                    <div class="card-body col-md-4">
                                        <div class="form-group">
                                            <label>Nama Admin</label>
                                            <input type="text" value="{{ $admin->username_admin }}" name="username_admin"
                                                @error('username_admin') is-invalid @enderror class="form-control" />
                                            @error('username_admin')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="card-body col-md-4">
                                        <div class="form-group">
                                            <label>Password Lama</label>
                                            <input type="text" value="{{ $admin->password_admin }}" name="password_admin"
                                                @error('password_admin') is-invalid @enderror class="form-control" />
                                            @error('password_admin')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    

                                </div>

                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="card-body col-md-4">
                                        <div class="form-group">
                                            <label>Password Baru</label>
                                            <input type="text" name="password_baru"
                                                @error('password_baru') is-invalid @enderror class="form-control" />
                                            @error('password_baru')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex mx-3 mb-3">

                                    <button type="submit" class="btn btn-success"> Update</button>
                                    <a href="{{ route('admin.index') }}" class="mx-3 btn btn-secondary"> Batal</a>
                                </div>
                            </form>
                        </div>

                    </div>
        </section>
    </div>
@endsection
