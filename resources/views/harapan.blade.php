@extends('layouts.utama')

@section('konten')
    @foreach ($harapan_artikel as $artikel)
        <article class="mb-5">
            <h2>
                <a href="/harapan/{{ $artikel['slug'] }}">{{ $artikel["judul"] }}</a>
            </h2>
            <h5>Oleh: {{ $artikel['penulis'] }}</h5>
            <p>{!! strip_tags($artikel['isi']) !!}</p>
        </article>
    @endforeach
@endsection