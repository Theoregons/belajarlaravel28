@extends('template')
@section('main')
    <h2>Tambah Data</h2>
        @csrf
        <input type="number" placeholder="inputkan nis" name="nis">
        <input type="text" placeholder="inputkan nama" name="nama">
        <input type="text" placeholder="inputkan alamat" name="alamat">
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
@endsection
