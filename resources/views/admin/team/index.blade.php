@extends('admin.layouts')
@section('Konten')
<head>
    <link rel="stylesheet" href="{{ asset('stylee/view.css') }}">
</head>
<div class="container">
    <div class="header">
    <h2>Daftar Tim</h2>
    <a href="{{ route('team.create') }}" class="btn-custom">Tambah Tim</a>
    </div>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Gambar</th>
                <th>Nama Pengguna</th>
                <th>Jabatan</th>
                <th>Nomor Telepon</th>
                <th>Alamat</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teams as $team)
                <tr>
                    <td>{{ $team->id }}</td>
                    <td><img src="{{ $team->path }}" alt="team Image" width="100"></td>
                    <td class="truncate-text">{{ $team->username }}</td>
                    <td class="truncate-text">{{ $team->position }}</td>
                    <td class="truncate-text">{{ $team->phone_number }}</td>
                    <td class="truncate-text">{{ $team->address }}</td>
                    <td class="truncate-text">{{ $team->description }}</td>
                    <td>
                        <a href="{{ route('team.edit', $team->id) }}" class="btn btn-primary">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('team.destroy', $team->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
@endsection
