@extends('admin.layouts')
@section('Konten')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('stylee/buatdanedit.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Slider</title>
    <style>
        .form-group {
            width: 100%;
            box-sizing: border-box;
        }

        .form-row {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .form-row .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-size: 16px;
            margin-bottom: 5px;
            display: block;
        }

        @media (max-width: 768px) {
            .form-group {
                width: 100%;
            }
        }
    </style>
</head>
<div class="container">
        <a href="{{ route('keunggulanaboutus.index') }}" class="btn-back">
            <i class="fas fa-arrow-left"></i>
        </a>
        <h2>Upload Keunggulan</h2>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form action="{{ route('keunggulanaboutus.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="superiority">Keunggulan:</label>
                <input type="text" id="superiority" name="superiority" required>
                @error('superiority')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn">Tambah</button>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            setTimeout(() => {
                document.querySelector('.alert-container').classList.add('show');
                setTimeout(() => {
                    document.querySelector('.alert-container').classList.remove('show');
                }, 3000);
            }, 100);
        });
    </script>
@endsection
