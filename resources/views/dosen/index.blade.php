@extends('layouts.app')
@section('content')
    <h1>Daftar Dosen</h1>

    <a href="{{ route('dosens.create') }}" class="btn btn-primary">Tambah Dosen</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dosens as $dosen)
                <tr>
                    <td>{{ $dosen->id }}</td>
                    <td>{{ $dosen->nama }}</td>
                    <td>{{ $dosen->email }}</td>
                    <td>
                        <a href="{{ route('dosens.show', $dosen->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('dosens.edit', $dosen->id) }}" class="btn btn-warning">Edit</a>
                        <!-- Tambahkan form untuk meng-handle delete -->
                        <form action="{{ route('dosens.destroy', $dosen->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
