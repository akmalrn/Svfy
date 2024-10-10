@extends('admin.layouts')
@section('Konten')

    <head>
        <link rel="stylesheet" href="{{ asset('stylee/buatdanedit.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    </head>
    <div class="container">
        <a href="{{ route('pricing.index') }}" class="btn-back">
            <i class="fas fa-arrow-left"></i>
        </a>
        <h2>Edit Harga</h2>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form action="{{ route('pricing.update', $pricing->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-row_2">
                <div class="form-group_2">
                    <label for="title">Judul:</label>
                    <input type="text" id="title" name="title" value="{{ $pricing->title }}">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group_2">
                    <label for="price">Harga:</label>
                    <input type="text" id="price" name="price" value="{{ $pricing->price }}">
                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div>
                <label for="superiority">Keunggulan:</label>
                <textarea id="superiority" name="superiority">{{ old('superiority', $pricing->superiority) }}</textarea>
                @error('superiority')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>            
            <button type="submit" class="btn">Update</button>
        </form>
    </div>
    <script>
        CKEDITOR.replace('superiority');
    </script>
@endsection
