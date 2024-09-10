@extends('template')
@section('main')
    <h1>Ini view Laravel saya</h1>

    <?php
    for ($i=1; $i <= 10; $i++) { ?>
    <h2>ini perulangan</h2>
    <?php } ?>

    @for ($i = 1; $i <= 3; $i++)
        <h2>ini perulangan menggunakan blade</h2>
    @endfor

    <img src="{{ asset('img/foto1.jpg') }}" width="300px">
@endsection
