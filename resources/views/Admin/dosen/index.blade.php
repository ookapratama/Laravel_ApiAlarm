@extends('Admin.layouts.index', ['title' => 'Dosen'])
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Dosen</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active">
                        <a href="#">Dashboard</a>
                    </div>
                    <div class="breadcrumb-item">
                        Dosen
                    </div>
                </div>
            </div>

            <div class="section-body">

                <div class="row">
                    <div class="col-md-12 ">
                        <div class="card">
                            <div class="card-header">
                                {{-- <h4>Simple</h4> --}}
                                <?php $i = $dosens->firstItem(); ?>

                                <a href="{{ route('dosen.create') }}" class="btn btn-success">
                                    <span class="ion-plus"></span>
                                    Tambah Dosen
                                </a>
                            </div>
                            <div class="card-body">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">NIDN</th>
                                            <th scope="col">No Telepon</th>
                                            <th scope="col">Admin</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($dosens as $dosen)
                                            <tr>
                                                <th scope="row">{{ ++$i }}</th>
                                                <td>{{ $dosen->nama_dosen }}</td>
                                                <td>{{ $dosen->nik_dosen }}</td>
                                                <td>{{ $dosen->nohp_dosen }}</td>
                                                <td>{{ $dosen->id_admin }}</td>
                                                <td>
                                                    <form action="{{ route('dosen.destroy', $mhs->id_dosen) }}"
                                                        method="POST">
                                                        <a href="{{ route('dosen.edit', $mhs->id_dosen) }}"
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
                                                <td colspan="6">Data tidak ada</td>
                                            </tr>
                                        @endforelse


                                    </tbody>
                                </table>
                                @if ($dosens->hasPages())
                                    <div class="card-footer">
                                        {{ $dosens->links() }}
                                    </div>
                                @endif
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection
