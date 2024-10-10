@extends('admin.layouts')
@section('Konten')
<head>
    <link rel="stylesheet" href="{{ asset('stylee/view.css') }}">
</head>
<div class="container">
    <div class="header">
    <h2>Daftar Sliders</h2>
    <a href="{{ route('slider.create') }}" class="btn-custom">Tambah Slider</a>
    </div>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Judul 1</th>
                <th>Judul 2</th>
                <th>Judul 3</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sliders as $slider)
                <tr>
                    <td>{{ $slider->id }}</td>
                    <td><img src="{{ $slider->path }}" alt="Slider Image" width="100"></td>
                    <td class="truncate-text">{{ $slider->title }}</td>
                    <td class="truncate-text">{{ $slider->title2 }}</td>
                    <td class="truncate-text">{{ $slider->title3 }}</td>
                    <td class="truncate-text">{{ $slider->description }}</td>
                    <td>
                        <a href="{{ route('slider.edit', $slider->id) }}" class="btn btn-primary">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('slider.destroy', $slider->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
@endsection
