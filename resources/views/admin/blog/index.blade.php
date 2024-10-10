@extends('admin.layouts')

@section('title', '')
@section('title2', '')

@section('Konten')
<head>
    <link rel="stylesheet" href="{{ asset('stylee/view.css') }}">
</head>
<div class="container">
    <div class="header">
        <h2>Daftar Blog</h2>
        <div>
            <a href="{{ route('blogs.create') }}" class="btn-custom" >Tambah Blog</a>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Gambar</th>
                <th>Kategori</th>
                <th>Judul</th>
                <th>Ringkasan</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($blogs as $blog)
                <tr>
                    <td>{{ $blog->id }}</td>
                    <td><img src="{{ asset($blog->path) }}" alt="galery Image" width="100"></td>
                    <td class="truncate-text">{{ $blog->category->category }}</td>
                    <td class="truncate-text">{{ $blog->title }}</td>
                    <td class="truncate-text">{{ $blog->overview }}</td>
                    <td class="truncate-text">{{ $blog->description }}</td>
                    <td>
                        <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-primary">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display:inline-block;">
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
