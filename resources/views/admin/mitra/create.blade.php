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
    <h2>Upload Mitra</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form action="{{ route('mitra.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Judul:</label>
            <input type="text" id="title" name="title">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="path">Image:</label>
            <input type="file" id="path" name="path">
            @error('path')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="link_mitra">Link Mitra :</label>
            <input type="url" id="link_mitra" name="link_mitra" value="{{ old('link_mitra', isset($mitra) ? $mitra->link_mitra : 'https://ya') }}" class="form-control">
            @error('link_mitra')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>        
        <button type="submit" class="btn">Tambah</button>
    </form>
</div>

<script>
document.getElementById('link_mitra').addEventListener('input', function() {
    var inputField = this;
    var prefix = 'https://';
    
    // Ensure the value always starts with "https://"
    if (!inputField.value.startsWith(prefix)) {
        inputField.value = prefix + inputField.value.replace(/^https?:\/\//, '');
    }
});
</script>
@endsection
