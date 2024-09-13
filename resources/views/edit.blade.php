@extends('template')
@section('main')
    <form action="{{ route('siswa.update',$dataSiswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>NIS</label>
            <input type="number" class="form-control" name="nis" value="{{ $dataSiswa->nis }}">
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama" value="{{ $dataSiswa->nama }}">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" class="form-control" name="alamat" value="{{ $dataSiswa->alamat }}">
        </div>
        <button type="submit" class="btn btn-success">Edit</button>
    </form>
@endsection
