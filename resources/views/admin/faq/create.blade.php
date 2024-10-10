@extends('admin.layouts')
@section('Konten')
<head>
    <link rel="stylesheet" href="{{ asset('stylee/buatdanedit.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<div class="container">
    <a href="{{ route('faqss.index') }}" class="btn-back">
        <i class="fas fa-arrow-left"></i>
    </a>
    <h2>Upload FAQ</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form action="{{ route('faqss.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-row_2">
        <div class="form-group_2">
            <label for="title">Gambar:</label>
            <input type="text" id="title" name="title"required>
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group_2">
            <label for="number">Nomor :</label>
            <input type="number" id="number" name="number"required>
            @error('number')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        </div>
        <div>
            <label for="description">Deskripsi:</label>
            <input type="text" id="description" name="description"required>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn">Tambah</button>
    </form>
</div>
@endsection
