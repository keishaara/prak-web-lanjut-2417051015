@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Buat Pengguna Baru</h4>
                </div>
                
                <div class="card-body">
                    <form action="{{ route('user.store') }}" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="nama" class="form-label fw-semibold">Nama:</label>
                            <input type="text" class="form-control" id="nama" name="nama" required placeholder="Masukkan nama pengguna">
                        </div>

                        <div class="mb-3">
                            <label for="npm" class="form-label fw-semibold">NPM:</label>
                            <input type="text" class="form-control" id="npm" name="npm" required placeholder="Masukkan NPM">
                        </div>

                        <div class="mb-3">
                            <label for="kelas_id" class="form-label fw-semibold">Kelas:</label>
                            <select name="kelas_id" id="kelas_id" class="form-control" required>
                                <option value="" disabled selected>-- Pilih Kelas --</option>
                                @foreach ($kelas as $kelasItem)
                                    <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <a href="{{ route('user.index') }}" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection