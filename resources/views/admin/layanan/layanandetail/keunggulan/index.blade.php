@extends('admin.layouts')

@section('title', '')
@section('title2', '')

@section('Konten')
<head>
    <link rel="stylesheet" href="{{ asset('stylee/view.css') }}">
</head>
<div class="container">
    <div class="header">
        <h2>Daftar Keunggulan Layanan</h2>
        <div>
            <a href="{{ route('keunggulanlayanandetail.create') }}" class="btn-custom" >Tambah Keunggulan</a>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Keunggulan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($keunggulans as $keunggulan)
                <tr>
                    <td>{{ $keunggulan->id }}</td>
                    <td>{{ $keunggulan->superiority }}</td>
                    <td>
                        <a href="{{ route('keunggulanlayanandetail.edit', $keunggulan->id) }}" class="btn btn-primary">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('keunggulanlayanandetail.destroy', $keunggulan->id) }}" method="POST" style="display:inline-block;">
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
