@extends('admin.layouts')
@section('Konten')

    <head>
        <link rel="stylesheet" href="{{ asset('stylee/buatdanedit.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    </head>
    <div class="container">
        <a href="{{ route('team.index') }}" class="btn-back">
            <i class="fas fa-arrow-left"></i>
        </a>
        <h2>Edit Tim</h2>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form action="{{ route('team.update', $team->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-row_2">
                <div class="form-group_2">
                    <label for="path">Gambar:</label>
                    <input type="file" id="path" name="path">
                    @if ($team->path)
                        <p>Current Image:</p>
                        <img src="{{ asset($team->path) }}" alt="Current Image" width="100">
                    @endif
                    @error('path')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group_2">
                    <label for="position">Jabatan:</label>
                    <input type="text" id="position" name="position" value="{{ $team->position }}">
                    @error('position')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-row_2">
                <div class="form-group_2">
                    <label for="username">Nama:</label>
                    <input type="text" id="username" name="username" value="{{ $team->username }}">
                    @error('username')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="phone_number">Nomor Telepon:</label>
                    <input type="text" id="phone_number" name="phone_number" value="{{ $team->phone_number }}">
                    @error('phone_number')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-row_2">
                <div class="form-group_2">
                    <label for="address">Alamat:</label>
                    <input type="text" id="address" name="address" value="{{ $team->address }}">
                    @error('address')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group_2">
                    <label for="email_address">Alamat Email:</label>
                    <input type="text" id="email_address" name="email_address" value="{{ $team->email_address }}">
                    @error('email_address')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-row_2">
                <div class="form-group_2">
                    <label for="link_facebook">Link Facebook:</label>
                    <input type="text" id="link_facebook" name="link_facebook" value="{{ $team->link_facebook }}">
                    @error('link_facebook')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group_2">
                    <label for="link_twitter">Link Twitter:</label>
                    <input type="text" id="link_twitter" name="link_twitter" value="{{ $team->link_twitter }}">
                    @error('link_twitter')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-row_2">
                <div class="form-group_2">
                    <label for="link_instagram">Link Instragram:</label>
                    <input type="text" id="link_instagram" name="link_instagram" value="{{ $team->link_instagram }}">
                    @error('link_instagram')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group_2">
                    <label for="link_linkedin">Link Linkedin:</label>
                    <input type="text" id="link_linkedin" name="link_linkedin" value="{{ $team->link_linkedin }}">
                    @error('link_linkedin')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group_2">
                <label for="description">Description:</label>
                <textarea id="description" name="description">{{ old('description', $team->description) }}</textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>            
            <button type="submit" class="btn">Update</button>
        </form>
    </div>
    <script>
        CKEDITOR.replace('description');
    </script>
@endsection
