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
        <h2>{{ isset($whyus->id) ? 'Update' : 'Create' }} whyus</h2>

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

        <form action="{{ route('whyus.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="path">Gambar :</label>
                <input type="file" id="path" name="path">
                @error('path')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                @if ($whyus->path)
                    <img src="{{ $whyus->path }}"
                        alt="Current Title Image" style="max-width: 100px; margin-top: 10px;">
                    <input type="hidden" name="path_lama" value="{{ $whyus->path }}">
                @endif
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="nav">Navigasi:</label>
                    <input type="text" name="nav" id="nav"
                        value="{{ old('nav', $whyus->nav) }}">
                </div>

                <div class="form-group">
                    <label for="title">Judul:</label>
                    <input type="text" name="title" id="title"
                        value="{{ old('title', $whyus->title) }}">
                </div>
            </div>  
            <div class="form-row">
                <div class="form-group">
                    <label for="overview">Ringkasan:</label>
                    <input type="text" name="overview" id="overview"
                        value="{{ old('overview', $whyus->overview) }}">
                </div>

                <div class="form-group">
                    <label for="link_youtube">Link Youtube:</label>
                    <input type="text" name="link_youtube" id="link_youtube"
                        value="{{ old('link_youtube', $whyus->link_youtube) }}">
                </div>
            </div>  

            <button type="submit" class="btn">{{ isset($whyus->id) ? 'Update' : 'Create' }}</button>
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
