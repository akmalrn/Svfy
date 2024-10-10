@extends('admin.layouts')
@section('Konten')

    <head>
        <link rel="stylesheet" href="{{ asset('stylee/buatdanedit.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    </head>
    <div class="container">
        <a href="{{ url()->previous() }}" class="btn-back">
            <i class="fas fa-arrow-left"></i>
        </a>
        <h2>Edit Kategori</h2>
        <form action="{{ route('categoryservice.update', $categoryservice->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="category">Nama Kategori:</label>
                <input type="text" name="category" id="category" value="{{ $categoryservice->nama_kategori }}"
                    required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
