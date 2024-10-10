@extends('admin.layouts')
@section('Konten')

    <head>
        <link rel="stylesheet" href="{{ asset('stylee/buatdanedit.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    </head>


    <div class="container">
        <a href="{{ route('categoryservice.index') }}" class="btn-back">
            <i class="fas fa-arrow-left"></i>
        </a>
        <h2>Tambah Kategori</h2>
        <form action="{{ route('categoryservice.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="category">Kategori:</label>
                <input type="text" name="category" id="category" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
