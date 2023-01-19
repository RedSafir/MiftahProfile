@extends('layout/main')

@section('container')
    <form action="/main/{{ $mahasiswa->id }}" method="POST">
        @method("put")
        @csrf
        <label for="nama" id="nama">Nama</label>
        <input type="text" name="nama" id="nama" value="{{ $mahasiswa->nama }}">
        <br>
        <label for="nrp" id="nama">NRP</label>
        <input type="text" name="nrp" id="nrp" value="{{ $mahasiswa->nrp }}">
        <br>
        <label for="status" id="status">Status</label>
        <input type="text" name="status" id="status" value="{{ $mahasiswa->status }}">
        <br>

        <button name="submit">Tambahkan</button>
    </form>
@endsection