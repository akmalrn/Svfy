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
        <h2>{{ isset($konfigurasi->id) ? 'Update' : 'Create' }} Konfigurasi</h2>

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

        <form action="{{ route('konfigurasi.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-row">
                <div class="form-group">
                    <label for="logo">Logo :</label>
                    <input type="file" id="logo" name="logo">
                    @error('logo')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    @if ($konfigurasi->logo)
                        <img src="{{ $konfigurasi->logo }}"
                            alt="Current Title Image" style="max-width: 100px; margin-top: 10px;">
                        <input type="hidden" name="logo_lama" value="{{ $konfigurasi->logo }}">
                    @endif
                </div>

                <div class="form-group">
                    <label for="logo_title">Iqon Title:</label>
                    <input type="file" name="logo_title" id="logo_title">
                    @error('logo_title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    @if ($konfigurasi->logo_title)
                    <img src="{{ $konfigurasi->logo_title }}"
                    alt="Current Title Image" style="max-width: 100px; margin-top: 10px;">
                        <input type="hidden" name="logo_title_lama" value="{{ $konfigurasi->logo_title }}">
                    @endif
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="nama_website">Nama Website:</label>
                    <input type="text" name="nama_website" id="nama_website" value="{{ old('nama_website', $konfigurasi->nama_website ?? '') }}">
                </div>

                <div class="form-group">
                    <label for="nama_title">Title:</label>
                    <input type="text" name="nama_title" id="nama_title"
                        value="{{ old('nama_title', $konfigurasi->nama_title) }}">
                </div>
            </div>

            <div>
                <label for="path_aside">Gambar Pinggir :</label>
                <input type="file" id="path_aside" name="path_aside">
                @error('path_aside')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                @if ($konfigurasi->path_aside)
                    <img src="{{ $konfigurasi->path_aside }}"
                        alt="Current Title Image" style="max-width: 100px; margin-top: 10px;">
                    <input type="hidden" name="path_aside_lama" value="{{ $konfigurasi->path_aside }}">
                @endif
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="aside">Aside:</label>
                    <input type="text" name="aside" id="aside"
                        value="{{ old('aside', $konfigurasi->aside) }}">
                </div>

                <div class="form-group">
                    <label for="aside2">Aside 2:</label>
                    <input type="text" name="aside2" id="aside2" value="{{ old('aside2', $konfigurasi->aside2) }}">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="nama_instagram">Instagram:</label>
                    <input type="text" name="nama_instagram" id="nama_instagram"
                        value="{{ old('nama_instagram', $konfigurasi->nama_instagram) }}">
                </div>

                <div class="form-group">
                    <label for="link_instagram">Link Instagram:</label>
                    <input type="text" name="link_instagram" id="link_instagram"
                        value="{{ old('link_instagram', $konfigurasi->link_instagram) }}">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="nama_facebook">Facebook:</label>
                    <input type="text" name="nama_facebook" id="nama_facebook"
                        value="{{ old('nama_facebook', $konfigurasi->nama_facebook) }}">
                </div>

                <div class="form-group">
                    <label for="link_facebook">Link Facebook:</label>
                    <input type="text" name="link_facebook" id="link_facebook"
                        value="{{ old('link_facebook', $konfigurasi->link_facebook) }}">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="nama_twitter">Twitter:</label>
                    <input type="text" name="nama_twitter" id="nama_twitter"
                        value="{{ old('nama_twitter', $konfigurasi->nama_twitter) }}">
                </div>

                <div class="form-group">
                    <label for="link_twitter">Link Twitter:</label>
                    <input type="text" name="link_twitter" id="link_twitter"
                        value="{{ old('link_twitter', $konfigurasi->link_twitter) }}">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="nama_linkedin">Linkedin:</label>
                    <input type="text" name="nama_linkedin" id="nama_linkedin"
                        value="{{ old('nama_linkedin', $konfigurasi->nama_linkedin) }}">
                </div>

                <div class="form-group">
                    <label for="link_linkedin">Link Linkedin:</label>
                    <input type="text" name="link_linkedin" id="link_linkedin"
                        value="{{ old('link_linkedin', $konfigurasi->link_linkedin) }}">
                </div>
            </div>

            <div class="form-row">

                <div class="form-group">
                    <label for="description_footer">Deskripsi Footer:</label>
                    <input type="text" name="description_footer" id="description_footer"
                        value="{{ old('description_footer', $konfigurasi->description_footer) }}">
                </div>

                <div class="form-group">
                    <label for="footer">Footer:</label>
                    <input type="text" name="footer" id="footer"
                        value="{{ old('footer', $konfigurasi->footer) }}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <input type="text" name="alamat" id="alamat"
                        value="{{ old('alamat', $konfigurasi->alamat) }}">
                </div>
                
                <div class="form-group">
                    <label for="timetable">Jadwal :</label>
                    <input type="text" name="timetable" id="timetable"
                        value="{{ old('timetable', $konfigurasi->timetable) }}">
                </div>
            </div>

            <button type="submit" class="btn">{{ isset($konfigurasi->id) ? 'Update' : 'Create' }}</button>
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
