@extends('admin.layouts')
@section('Konten')

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('stylee/buatdanedit.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
        <a href="{{ route('pricing.index') }}" class="btn-back">
            <i class="fas fa-arrow-left"></i>
        </a>
        <h2>Upload Harga</h2>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form action="{{ route('pricing.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row_2">
                <div class="form-group_2">
                    <label for="title">Judul :</label>
                    <input type="text" id="title" name="title">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group_2">
                    <label for="price">Harga:</label>
                    <input type="number" id="price" name="price">
                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group_2">
                <label for="superiority">Keunggulan:</label>
                <textarea id="superiority" name="superiority"></textarea>
                @error('superiority')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        
            <button type="submit" class="btn">Tambah</button>
        </form>        
        
    </div>
    <script>
        CKEDITOR.replace('superiority');
    </script>
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
