@extends('admin.layouts')
@section('Konten')

    <head>
        <link rel="stylesheet" href="{{ asset('stylee/buatdanedit.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>
    </head>
    <div class="container">
        <a href="{{ route('service.index') }}" class="btn-back">
            <i class="fas fa-arrow-left"></i>
        </a>
        <h2>Edit Layanan</h2>
        <form action="{{ route('service.update', $service->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <select class="form-control" id="category_id" name="category_id" required>
                <option value="">Select a Category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $service->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->category }}
                    </option>
                @endforeach
            </select>
            <div class="form-group">
                <label for="path">Gambar Layanan :</label>
                <input type="file" name="path" id="path">
                @if ($service->path)
                    <p>Current Image:</p>
                    <img src="{{ asset($service->path) }}" alt="{{ $service->title }}" style="width: 100px; height: auto;">
                @endif
            </div>
            <div class="form-group">
                <label for="title">Judul:</label>
                <input type="text" name="title" id="title" value="{{ $service->title }}">
            </div>
            <div class="form-group">
                <label for="overview">Ringkasan:</label>
                <input type="text" name="overview" id="overview" value="{{ $service->overview }}">
            </div>
            <div class="form-group">
                <label for="description">Deskripsi:</label>
                <input type="text" name="description" id="description" value="{{ $service->description }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

@endsection
