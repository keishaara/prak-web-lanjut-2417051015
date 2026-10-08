@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-lg border-0 rounded-4 bg-dark text-white">
                <div class="card-header bg-secondary text-white d-flex justify-content-between align-items-center py-3 rounded-top-4">
                    <h3 class="mb-0 fw-bold">{{ $title ?? 'Daftar Pengguna' }}</h3>
                    <a href="{{ route('user.create') }}" class="btn btn-light text-dark fw-bold btn-sm shadow-sm">+ Tambah User</a>
                </div>
                <div class="card-body p-4">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-dark table-hover table-striped align-middle text-center">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Lengkap</th>
                                    <th>NPM</th>
                                    <th>Kelas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td class="small text-white font-monospace fw-bold">{{ $user->id }}</td>                                    <td class="text-start">{{ $user->nama }}</td>
                                    <td><span class="badge bg-info text-dark">{{ $user->nim }}</span></td>
                                    <td><span class="badge bg-success">{{ $user->nama_kelas }}</span></td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-1">
                                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning btn-sm text-dark fw-bold">Edit</a>
                                            <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                            </form>
                                        </div>
                                    </td>
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