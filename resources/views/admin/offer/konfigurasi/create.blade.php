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
        <h2>{{ isset($konfigurasifaq->id) ? 'Update' : 'Create' }} Konfigurasi Penawaran</h2>

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

        <form action="{{ route('konfigurasioffer.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="form-group">
                    <label for="path">Gambar :</label>
                    <input type="file" id="path" name="path">
                    @error('path')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    @if ($konfigurasioffer->path)
                        <img src="{{ $konfigurasioffer->path }}"
                            alt="Current Title Image" style="max-width: 100px; margin-top: 10px;">
                        <input type="hidden" name="path_lama" value="{{ $konfigurasioffer->path }}">
                    @endif
                </div>

                <div class="form-group">
                    <label for="nav">Navigasi:</label>
                    <input type="text" name="nav" id="nav" value="{{ old('nav', $konfigurasioffer->nav) }}">
                </div>
            </div>
            <div>
                <label for="title">Judul :</label>
                <input type="text" name="title" id="title" value="{{ old('title', $konfigurasioffer->title) }}">
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="title_include">Include :</label>
                    <input type="text" name="title_include" id="title_include"
                        value="{{ old('title_include', $konfigurasioffer->title_include) }}" placeholder="Judul">
                    <input type="text" name="include" id="include"
                        value="{{ old('include', $konfigurasioffer->include) }}" placeholder="Deskripsi">
                </div>

                <div class="form-group">
                    <label for="title_include2">Include 2:</label>
                    <input type="text" name="title_include2"
                        id="title_include2"value="{{ old('title_include2', $konfigurasioffer->title_include2) }}"
                        placeholder="Judul">
                    <input type="text" name="include2"
                        id="include2"value="{{ old('include2', $konfigurasioffer->include2) }}" placeholder="Deskripsi">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="title_include3">Include 3:</label>
                    <input type="text" name="title_include3"
                        id="title_include3"value="{{ old('title_include3', $konfigurasioffer->title_include3) }}"
                        placeholder="Judul">
                    <input type="text" name="include3"
                        id="include3"value="{{ old('include3', $konfigurasioffer->include3) }}" placeholder="deskripsi">
                </div>

                <div class="form-group">
                    <label for="title_include4">Include 4:</label>
                    <input type="text" name="title_include4"
                        id="title_include4"value="{{ old('title_include4', $konfigurasioffer->title_include4) }}"
                        placeholder="Judul">
                    <input type="text" name="include4"
                        id="include4"value="{{ old('include4', $konfigurasioffer->include4) }}" placeholder="deskripsi">
                </div>
            </div>

            <button type="submit" class="btn">{{ isset($konfigurasioffer->id) ? 'Update' : 'Create' }}</button>
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
