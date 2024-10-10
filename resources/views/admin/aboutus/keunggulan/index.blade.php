@extends('admin.layouts')
@section('Konten')
<head>
    <link rel="stylesheet" href="{{ asset('stylee/view.css') }}">
</head>
<div class="container">
    <div class="header">
    <h2>All Keunggulan About Us</h2>
    <a href="{{ route('keunggulanaboutus.create') }}" class="btn-custom">Tambah Keunggulan</a>
    </div>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Keunggulan</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($keunggulan as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td class="truncate-text">{{ $item->superiority }}</td>
                    <td>
                        <a href="{{ route('keunggulanaboutus.edit', $item->id) }}" class="btn btn-primary">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('keunggulanaboutus.destroy', $item->id) }}" method="POST" style="display:inline-block;">
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
