@extends('admin.layouts')
@section('Konten')
<head>
    <link rel="stylesheet" href="{{ asset('stylee/view.css') }}">
</head>
<div class="container">
    <div class="header">
    <h2>Daftar Keunggulan</h2>
    <a href="{{ route('superioritywhyus.create') }}" class="btn-custom">Tambah Keunggulan</a>
    </div>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Gambar</th>
                <th>Keunggulan</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($superiority as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><img src="{{ asset($item->path) }}" alt="item Wisata Image" width="100"></td>
                    <td>{{ $item->superiority }}</td>
                    <td>
                        <a href="{{ route('superioritywhyus.edit', $item->id) }}" class="btn btn-primary">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('superioritywhyus.destroy', $item->id) }}" method="POST" style="display:inline-block;">
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
