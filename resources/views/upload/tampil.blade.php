@extends('template')
@section('main')
    <h2>Upload Gambar</h2>
    <form action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data" class="d-flex" >
        @csrf
        <div class="custom-file  w-25 mr-2">
            <input type="file" class="custom-file-input" name="image">
            <label class="custom-file-label">Pilih Gambar</label>
        </div>
        <button class="btn btn-success">Upload</button>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Gambar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">1</th>
                    <td><img src="{{ asset('storage/'.$item->image) }}" width="200" alt=""></td>
                    <td><a href="{{ route('siswa.edit', $item->id) }}" class="btn btn-warning">Edit</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
