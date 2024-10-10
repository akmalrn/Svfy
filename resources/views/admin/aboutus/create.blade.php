@extends('admin.layouts')
@section('Konten')

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('stylee/buatdanedit.css') }}">
        <link rel="stylesheet" href="{{ asset('stylee/konfigurasi.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    </head>

    <body>
        <h2>{{ isset($aboutus->id) ? 'Update' : 'Create' }} Konfigurasi About Us</h2>

        <!-- Alert untuk menampilkan pesan sukses -->
        @if (session('success'))
            <div class="alert-container">
                <div class="alert">
                    <i class="fas fa-check-circle"></i> <!-- Ikon centang -->
                    <span class="alert-message">Data berhasil disimpan!</span>
                </div>
            </div>
        @endif

        <!-- Alert untuk menampilkan pesan error -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('aboutus.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="form-group">
                    <label for="nav">Navigasi :</label>
                    <input type="text" name="nav" id="nav" value="{{ old('nav', $aboutus->nav) }}">
                </div>
                <div class="form-group">
                    <label for="path">Gambar :</label>
                    <input type="file" id="path" name="path">
                    @error('path')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    @if ($aboutus->path)
                        <img src="{{ $aboutus->path }}" alt="Current Title Image"
                            style="max-width: 100px; margin-top: 10px;">
                        <input type="hidden" name="path_lama" value="{{ $aboutus->path }}">
                    @endif
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="title">Judul :</label>
                    <input type="text" name="title" id="title" value="{{ old('title', $aboutus->title) }}">
                </div>

                <div class="form-group">
                    <label for="description">Deskripsi:</label>
                    <input type="text" name="description" id="description"
                        value="{{ old('description', $aboutus->description) }}">
                </div>
            </div>

            <div>
                <label for="overview">Ringkasan :</label>
                <input type="text" name="overview" id="overview" value="{{ old('overview', $aboutus->overview) }}">
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="title_include">Include :</label>
                    <input type="text" name="title_include" id="title_include" value="{{ old('title_include', $aboutus->title_include) }}" placeholder="Judul">
                    <input type="text" name="include" id="include" value="{{ old('include', $aboutus->include) }}" placeholder="Deskripsi">
                </div>

                <div class="form-group">
                    <label for="title_include2">Include 2:</label>
                    <input type="text" name="title_include2" id="title_include2"value="{{ old('title_include2', $aboutus->title_include2) }}" placeholder="Judul">
                    <input type="text" name="include2" id="include2"value="{{ old('include2', $aboutus->include2) }}" placeholder="Deskripsi">
                </div>
            </div>

            <div>
                <label for="title_include3">Include 3:</label>
                <input type="text" name="title_include3" id="title_include3"value="{{ old('title_include3', $aboutus->title_include3) }}" placeholder="Judul">
                <input type="text" name="include3" id="include3"value="{{ old('include3', $aboutus->include3) }}" placeholder="deskripsi">
            </div>

            <button type="submit" class="btn">{{ isset($aboutus->id) ? 'Update' : 'Create' }}</button>
        </form>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                // Tampilkan alert dan kemudian hilangkan setelah 3 detik
                setTimeout(() => {
                    const alertContainer = document.querySelector('.alert-container');
                    if (alertContainer) {
                        alertContainer.classList.add('show');
                        setTimeout(() => {
                            alertContainer.classList.remove('show');
                        }, 3000); // Waktu tampil sebelum menghilang
                    }
                }, 100); // Waktu delay sebelum tampil
            });
        </script>
    </body>
@endsection
