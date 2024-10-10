@extends('admin.layouts')
@section('Konten')
<head>
    <link rel="stylesheet" href="{{ asset('stylee/buatdanedit.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<div class="container">
    <a href="{{ route('superioritywhyus.index') }}" class="btn-back">
        <i class="fas fa-arrow-left"></i>
    </a>
    <h2>Edit Keunggulan</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form action="{{ route('superioritywhyus.update', $superiority->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="path">Gambar:</label>
            <input type="file" id="path" name="path">
            @if($superiority->path)
                <p>Current Image:</p>
                <img src="{{ asset($superiority->path) }}" alt="Current Image" width="100">
            @endif
            @error('path')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="superiority">Keunggulan:</label>
            <input type="text" id="superiority" name="superiority" value="{{ $superiority->superiority }}" required>
            @error('superiority')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn">Update</button>
    </form>
</div>
@endsection
