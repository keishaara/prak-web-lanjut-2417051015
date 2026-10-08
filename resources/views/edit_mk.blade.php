@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-warning text-dark">
                    <h4 class="mb-0">Edit Mata Kuliah</h4>
                </div>
                
                <div class="card-body">
                    <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="nama_mk" class="form-label fw-semibold">Nama Mata Kuliah:</label>
                            <input type="text" class="form-control" id="nama_mk" name="nama_mk" value="{{ $mk->nama_mk }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="sks" class="form-label fw-semibold">SKS:</label>
                            <input type="number" class="form-control" id="sks" name="sks" value="{{ $mk->sks }}" required>
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-warning fw-bold">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection