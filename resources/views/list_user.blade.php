@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-lg border-0 rounded-4 bg-dark text-white">
                <div class="card-header bg-secondary text-white d-flex justify-content-between align-items-center py-3 rounded-top-4">
                    <h3 class="mb-0 fw-bold">Daftar Pengguna</h3>
                    <a href="{{ route('user.create') }}" class="btn btn-light text-dark fw-bold btn-sm shadow-sm">+ Tambah User</a>
                </div>
                <div class="card-body p-4">
                    <div class="table-responsive">
                        <table class="table table-dark table-hover table-striped align-middle text-center">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>Nama Lengkap</th>
                                    <th>NPM</th>
                                    <th>Kelas</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td class="fw-bold">{{ $user->id }}</td>
                                    <td class="text-start">{{ $user->nama }}</td>
                                    <td><span class="badge bg-info text-dark">{{ $user->nim }}</span></td>
                                    <td><span class="badge bg-success">{{ $user->nama_kelas }}</span></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection