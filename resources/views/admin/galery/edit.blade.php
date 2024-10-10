
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
    <h2>Edit Galeri</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form action="{{ route('galery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label for="path">Gambar:</label>
            <input type="file" id="path" name="path">
            @if($gallery->path)
                <p>Current Image:</p>
                <img src="{{ asset($gallery->path) }}" alt="Current Image" width="100">
            @endif
            @error('path')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn">Update</button>
    </form>
</div>
@endsection
