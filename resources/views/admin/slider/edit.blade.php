
@extends('admin.layouts')
@section('Konten')
<head>
 <link rel="stylesheet" href="{{ asset('stylee/buatdanedit.css') }}">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<div class="container">
    <a href="{{ route('slider.index') }}" class="btn-back">
        <i class="fas fa-arrow-left"></i>
    </a>
    <h2>Edit Slider</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form action="{{ route('slider.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="path">Gambar:</label>
            <input type="file" id="path" name="path">
            @if($slider->path)
                <p>Current Image:</p>
                <img src="{{ asset($slider->path) }}" alt="Current Image" width="100">
            @endif
            @error('path')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ $slider->title }}" required>
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="title2">Title 2:</label>
            <input type="text" id="title2" name="title2" value="{{ $slider->title2 }}" required>
            @error('title2')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="title3">Title 3:</label>
            <input type="text" id="title3" name="title3" value="{{ $slider->title3 }}" required>
            @error('title3')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" id="description" name="description" value="{{ $slider->description }}" required>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn">Update</button>
    </form>
</div>
@endsection
