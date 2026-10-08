@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Tambah Mata Kuliah Baru</h4>
                </div>
                
                <div class="card-body">
                    <form action="{{ route('matakuliah.store') }}" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="nama_mk" class="form-label fw-semibold">Nama Mata Kuliah:</label>
                            <input type="text" class="form-control" id="nama_mk" name="nama_mk" required placeholder="Masukkan nama mata kuliah">
                        </div>

                        <div class="mb-3">
                            <label for="sks" class="form-label fw-semibold">SKS:</label>
                            <input type="number" class="form-control" id="sks" name="sks" required min="1" max="6" placeholder="Masukkan jumlah SKS">
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection