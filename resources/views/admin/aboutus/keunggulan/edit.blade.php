
@extends('admin.layouts')
@section('Konten')
<head>
 <link rel="stylesheet" href="{{ asset('stylee/buatdanedit.css') }}">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<div class="container">
    <a href="{{ route('keunggulanaboutus.index') }}" class="btn-back">
        <i class="fas fa-arrow-left"></i>
    </a>
    <h2>Edit Keunggulan</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form action="{{ route('keunggulanaboutus.update', $keunggulan->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="superiority">Keunggulan :</label>
            <input type="text" id="superiority" name="superiority" value="{{ $keunggulan->superiority }}" required>
            @error('superiority')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn">Update</button>
    </form>
</div>
@endsection
