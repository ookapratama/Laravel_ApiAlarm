@extends('Admin.layouts.index', ['title' => 'Admin'])
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Admin</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active">
                        <a href="#">Dashboard</a>
                    </div>
                    <div class="breadcrumb-item">
                        Admin
                    </div>
                </div>
            </div>

            <div class="section-body">

                <div class="row">
                    <div class="col-md-12 ">
                        <div class="card">
                            <div class="card-header">
                                {{-- <h4>Simple</h4> --}}
                                <?php $i = $admins->firstItem(); ?>

                                <a href="{{ route('admin.create') }}" class="btn btn-success">
                                    <span class="ion-plus"></span>
                                    Tambah Admin
                                </a>
                            </div>
                            <div class="card-body">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Username</th>
                                            <th scope="col">Password</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($admins as $admin)
                                            <tr>
                                                <th scope="row">{{ $i++ }}</th>
                                                <td>{{ $admin->username_admin }}</td>
                                                <td>{{ $admin->password_admin }}</td>
                                                <td>
                                                    <form action="{{ route('admin.destroy', $admin->id_admin) }}"
                                                        method="POST">
                                                        <a href="{{ route('admin.edit', $admin->id_admin) }}"
                                                            class="btn btn-warning">Edit</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" id="swal-delete"
                                                            class="btn btn-danger">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4">Data tidak ada</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection
