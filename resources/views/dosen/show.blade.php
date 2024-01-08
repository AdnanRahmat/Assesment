@extends('layouts.app')
@section('content')
    <h1>Detail Dosen</h1>

    <p>ID: {{ $dosen->id }}</p>
    <p>Nama: {{ $dosen->nama }}</p>
    <p>Email: {{ $dosen->email }}</p>

    <a href="{{ route('dosens.edit', $dosen->id) }}" class="btn btn-warning">Edit</a>

    <!-- Tambahkan form untuk meng-handle delete -->
    <form action="{{ route('dosens.destroy', $dosen->id) }}" method="POST" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
    </form>
@endsection
