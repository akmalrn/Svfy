
@extends('admin.layouts')
@section('Konten')
<head>
    <link rel="stylesheet" href="{{ asset('stylee/buatdanedit.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<div class="container">
    <a href="{{ route('mitra.index') }}" class="btn-back">
        <i class="fas fa-arrow-left"></i>
    </a>
    <h2>Edit Mitra</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form action="{{ route('mitra.update', $mitra->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <!-- Title Field -->
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ old('title', $mitra->title) }}" class="form-control">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    
        <!-- Path (Image) Field -->
        <div class="form-group">
            <label for="path">Gambar:</label>
            <input type="file" id="path" name="path">
            @if($mitra->path)
                <p>Current Image:</p>
                <img src="{{ asset($mitra->path) }}" alt="Current Image" width="100">
            @endif
            @error('path')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    
        <!-- Link Mitra Field -->
        <div class="form-group">
            <label for="link_mitra">Link Mitra:</label>
            <input type="url" id="link_mitra" name="link_mitra" value="{{ old('link_mitra', $mitra->link_mitra) }}" class="form-control">
            @error('link_mitra')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    
        <button type="submit" class="btn">Update</button>
    </form>
    
</div>
@endsection
