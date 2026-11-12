@extends('layouts.app')
@section('isi')
    @if (session('sukses'))
        <p>{{ session('sukses') }}</p>
    @endif

    <a href="{{ route('anggota.create') }}">Tambah Anggota</a>

    <table border="1" cellpadding="6">
        <tr><th>NIM</th><th>Nama</th><th>Divisi</th><th>Angkatan</th><th>Aksi</
    th></tr>
        @forelse ($anggota as $a)
            <tr>
                <td>{{ $a->nim }}</td>
                <td>{{ $a->nama }}</td>
                <td>{{ $a->divisi }}</td>
                <td>{{ $a->angkatan }}</td>
                <td>
                    <a href="{{ route('anggota.edit', $a->id) }}">Ubah</a>
                    <form action="{{ route('anggota.destroy', $a->id) }}"
                            method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="5">Belum ada anggota.</td></tr>
        @endforelse
    </table>
@endsection