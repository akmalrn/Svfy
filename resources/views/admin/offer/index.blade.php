@extends('admin.layouts')
@section('Konten')
<head>
    <link rel="stylesheet" href="{{ asset('stylee/view.css') }}">
</head>
<div class="container">
    <div class="header">
    <h2>Daftar Penawaran</h2>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>username</th>
                <th>Alamat Email</th>
                <th>Nomor Hp</th>
                <th>subject</th>
                <th>deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($offer as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->username }}</td>
                    <td>{{ $item->email_address }}</td>
                    <td>{{ $item->phone_number }}</td>
                    <td>{{ $item->subject }}</td>
                    <td class="truncate-text">{{ $item->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
@endsection
