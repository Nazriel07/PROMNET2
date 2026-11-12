@extends('layouts.app')

@section('isi')
    <h3>Tambah Anggota</h3>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $pesan)
                <li>{{ $pesan }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('anggota.store') }}" method="POST">
        @csrf

        <p>
            <label for="nim">NIM</label><br>
            <input type="text" id="nim" name="nim" value="{{ old('nim') }}">
        </p>
        <p>
            <label for="nama">Nama</label><br>
            <input type="text" id="nama" name="nama" value="{{ old('nama') }}">
        </p>
        <p>
            <label for="divisi">Divisi</label><br>
            <select id="divisi" name="divisi">
                <option value="Humas">Humas</option>
                <option value="Acara">Acara</option>
                <option value="Logistik">Logistik</option>
            </select>
        </p>
        <p>
            <label for="angkatan">Angkatan</label><br>
            <input type="number" id="angkatan" name="angkatan" value="{{ old('angkatan') }}">
        </p>
        
        <button type="submit">Simpan</button>
    </form>
@endsection