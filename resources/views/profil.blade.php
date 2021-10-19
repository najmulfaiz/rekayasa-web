@extends('layouts.utama')

@section('konten')
    <h1>Halaman Profil</h1>
    <p>
        Nama : {{ $nama }}<br/>
        NIM : {{ $nim }}
    </p>
@endsection