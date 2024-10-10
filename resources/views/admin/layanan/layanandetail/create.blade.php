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
        <h2>{{ isset($konfigurasilayanandetail->id) ? 'Update' : 'Create' }} Konfigurasi Layanan Detail</h2>

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

        <form action="{{ route('konfigurasilayanandetail.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="form-group">
                    <label for="nav">Navigasi:</label>
                    <input type="text" name="nav" id="nav"
                        value="{{ old('nav', $konfigurasilayanandetail->nav) }}">
                </div>
                <div class="form-group">
                    <label for="title_feature">Judul Fitur:</label>
                    <input type="text" name="title_feature" id="title_feature"
                        value="{{ old('title_feature', $konfigurasilayanandetail->title_feature) }}">
                </div>
            </div>
            <button type="submit" class="btn">{{ isset($konfigurasilayanandetail->id) ? 'Update' : 'Create' }}</button>
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
