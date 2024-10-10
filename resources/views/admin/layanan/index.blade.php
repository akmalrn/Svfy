@extends('admin.layouts')

@section('title', '')
@section('title2', '')

@section('Konten')
<head>
    <link rel="stylesheet" href="{{ asset('stylee/view.css') }}">
</head>
<div class="container">
    <div class="header">
        <h2>Daftar Layanan</h2>
        <div>
            <a href="{{ route('service.create') }}" class="btn-custom" >Tambah Layanan</a>
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
                <th>Path</th>
                <th>Kategori</th>
                <th>Title</th>
                <th>overview</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $service)
                <tr>
                    <td>{{ $service->id }}</td>
                    <td><img src="{{ $service->path }}"  alt="{{ $service->title }}" width="100"></td>
                    <td class="truncate-text">{{ $service->category->category }}</td>
                    <td class="truncate-text">{{ $service->title }}</td>
                    <td class="truncate-text">{{ $service->overview }}</td>
                    <td class="truncate-text">{{ $service->description }}</td>
                    <td>
                        <a href="{{ route('service.edit', $service->id) }}" class="btn btn-primary">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('service.destroy', $service->id) }}" method="POST" style="display:inline-block;">
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
