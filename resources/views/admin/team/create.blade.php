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
        <a href="{{ route('team.index') }}" class="btn-back">
            <i class="fas fa-arrow-left"></i>
        </a>
        <h2>Upload Tim</h2>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row_2">
                <div class="form-group_2">
                    <label for="path">Gambar:</label>
                    <input type="file" id="path" name="path">
                    @error('path')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group_2">
                    <label for="position">Jabatan:</label>
                    <input type="text" id="position" name="position">
                    @error('position')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-row_2">
                <div class="form-group_2">
                    <label for="username">Nama:</label>
                    <input type="text" id="username" name="username">
                    @error('username')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group_2">
                    <label for="phone_number">Nomor Telepon:</label>
                    <input type="text" id="phone_number" name="phone_number">
                    @error('phone_number')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-row_2">
                <div class="form-group_2">
                    <label for="address">Alamat:</label>
                    <input type="text" id="address" name="address">
                    @error('address')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group_2">
                    <label for="email_address">Alamat Email:</label>
                    <input type="email" id="email_address" name="email_address">
                    @error('email_address')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-row_2">
                <div class="form-group_2">
                    <label for="link_facebook">Link Facebook:</label>
                    <input type="text" id="link_facebook" name="link_facebook">
                    @error('link_facebook')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group_2">
                    <label for="link_twitter">Link Twitter:</label>
                    <input type="text" id="link_twitter" name="link_twitter">
                    @error('link_twitter')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-row_2">
                <div class="form-group_2">
                    <label for="link_instagram">Link Instagram:</label>
                    <input type="text" id="link_instagram" name="link_instagram">
                    @error('link_instagram')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group_2">
                    <label for="link_linkedin">Link Linkedin:</label>
                    <input type="text" id="link_linkedin" name="link_linkedin">
                    @error('link_linkedin')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group_2">
                <label for="description">Deskripsi:</label>
                <textarea id="description" name="description"></textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        
            <button type="submit" class="btn">Tambah</button>
        </form>
        
    </div>
    <script>
        CKEDITOR.replace('description');
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
