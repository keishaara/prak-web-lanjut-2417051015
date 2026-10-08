@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Daftar Mata Kuliah</h4>
            <a href="{{ route('matakuliah.create') }}" class="btn btn-light btn-sm fw-bold">
                + Tambah Mata Kuliah Baru
            </a>
        </div>
        
        <div class="card-body">
            {{-- Alert Notifikasi Sukses --}}
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-hover table-bordered align-middle">
                    <thead class="table-dark text-center">
                        <tr>
                            <th width="35%">ID</th>
                            <th>Nama Mata Kuliah</th>
                            <th width="15%">SKS</th>
                            <th width="20%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($mks as $mk)
                            <tr>
                                <td class="text-muted small"><code>{{ $mk->id }}</code></td>
                                <td class="fw-semibold">{{ $mk->nama_mk }}</td>
                                <td class="text-center"><span class="badge bg-secondary">{{ $mk->sks }} SKS</span></td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-1">
                                        <a href="{{ route('matakuliah.edit', $mk->id) }}" class="btn btn-warning btn-sm text-dark fw-bold">
                                            Edit
                                        </a>
                                        <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted py-4">Belum ada data mata kuliah.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection