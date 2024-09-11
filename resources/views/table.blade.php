@extends('template')

@section('main')
    <h1>Ini Halaman Tabel</h1>

    @foreach ($barang as $item)
        {{ $item }}
    @endforeach

@endsection
