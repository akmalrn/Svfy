@extends('admin.layouts')
@section('Konten')
<head>
    <link rel="stylesheet" href="{{ asset('stylee/view.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<div class="container">
    <div class="header">
    <h2>Daftar FAQ</h2>
    <a href="{{ route('faqss.create') }}" class="btn-custom">Tambah FAQ</a>
    </div>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Nomor</th>
                <th>Deskripsi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($faq as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->number }}</td>
                    <td>{{ $item->description }}</td>
                    <td>
                        <a href="{{ route('faqss.edit', $item->id) }}" class="btn btn-primary">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('faqss.destroy', $item->id) }}" method="POST" style="display:inline-block;">
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
@endsection
