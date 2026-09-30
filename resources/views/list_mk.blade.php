@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Mata Kuliah</h1>

    <a href="{{ route('matakuliah.create') }}">
        Tambah Mata Kuliah Baru
    </a>

    <br><br>

    <table style="border-collapse: collapse; width: 100%;">
        <thead>
            <tr>
                <th style="border: 1px solid black; padding: 10px; text-align: left;">
                    ID
                </th>
                <th style="border: 1px solid black; padding: 10px; text-align: left;">
                    Nama Mata Kuliah
                </th>
                <th style="border: 1px solid black; padding: 10px; text-align: left;">
                    SKS
                </th>
            </tr>
        </thead>

        <tbody>
            @foreach ($mks as $mk)
                <tr>
                    <td style="border: 1px solid black; padding: 10px;">
                        {{ $mk->id }}
                    </td>

                    <td style="border: 1px solid black; padding: 10px;">
                        {{ $mk->nama_mk }}
                    </td>

                    <td style="border: 1px solid black; padding: 10px;">
                        {{ $mk->sks }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection