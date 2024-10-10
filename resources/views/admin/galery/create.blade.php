@extends('admin.layouts')
@section('Konten')
<head>
    <link rel="stylesheet" href="{{ asset('stylee/buatdanedit.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<div class="container">
    <a href="{{ route('galery.index') }}" class="btn-back">
        <i class="fas fa-arrow-left"></i>
    </a>
    <h2>Upload Galeri</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form action="{{ route('galery.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="path">Gambar:</label>
            <input type="file" id="path" name="path" accept="image/*" required>
            @error('path')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn">Tambah</button>
    </form>
</div>
@endsection
