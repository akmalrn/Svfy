@extends('admin.layouts')
@section('Konten')

    <head>
        <link rel="stylesheet" href="{{ asset('stylee/buatdanedit.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>
    </head>
    <div class="container">
        <a href="{{ route('blogs.index') }}" class="btn-back">
            <i class="fas fa-arrow-left"></i>
        </a>
        <h2>Tambah Blog</h2>
        <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
            <div class="form-group">
                <label for="category_id">Kategori</label>
                <select class="form-control" id="category_id" name="category_id" required>
                    <option value="">Select a Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="title">Judul:</label>
                <input type="text" name="title" id="title" required>
            </div>
            </div>
            <div class="form-row">
            <div class="form-group">
                <label for="overview">Ringkasan:</label>
                <input type="text" name="overview" id="overview">
            </div>
            <div class="form-group">
                <label for="path">Gambar:</label>
                <input type="file" name="path" id="path" required>
            </div>
            </div>
            <div>
                <label for="description">Deskripsi:</label>
                <textarea name="description" id="description"></textarea>
            </div>
            <div class="row">
                <div class="col-md">
                    <label for="meta_keywords">Meta Keywords:</label>
                    <textarea name="meta_keywords" id="meta_keywords" style="width: 100%"></textarea>
                </div>

                <div class="col-md">
                    <label for="meta_descriptions">Meta Deskripsi:</label>
                    <textarea name="meta_descriptions" id="meta_descriptions" style="width: 100%"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
