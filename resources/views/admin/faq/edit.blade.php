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
        <h2>Edit FAQ</h2>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form action="{{ route('faqss.update', $faq->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-row_2">
                <div class="form-group_2">
                    <label for="title">Judul:</label>
                    <input type="text" id="title" name="title" value="{{ old('title', $faq->title) }}" required>
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group_2">
                    <label for="number">Nomor:</label>
                    <input type="text" id="number" name="number" value="{{ old('number', $faq->number) }}" required>
                    @error('number')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div>
                <label for="description">Deskripsi:</label>
                <input type="text" id="description" name="description" value="{{ old('description', $faq->description) }}" required>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn">Update</button>
        </form>
        
    </div>
@endsection
