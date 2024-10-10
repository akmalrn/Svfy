@extends('admin.layouts')
@section('Konten')
<head>
    <link rel="stylesheet" href="{{ asset('stylee/view.css') }}">
</head>
<div class="container">
    <div class="header">
    <h2>Daftar Harga</h2>
    <a href="{{ route('pricing.create') }}" class="btn-custom">Tambah Harga</a>
    </div>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Harga</th>
                <th>Keunggulan</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pricings as $team)
                <tr>
                    <td>{{ $team->id }}</td>
                    <td class="truncate-text">{{ $team->title }}</td>
                    <td class="truncate-text">{{ $team->price }}</td>
                    <td class="truncate-text">{{ $team->superiority }}</td>
                    <td>
                        <a href="{{ route('pricing.edit', $team->id) }}" class="btn btn-primary">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('pricing.destroy', $team->id) }}" method="POST" style="display:inline-block;">
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
