@extends('layout/main')

@section('container')
    <form action="/tambah/store" method="POST">
        @csrf
        <label for="nama" id="nama">Nama</label>
        <input type="text" name="nama" id="nama">
        <br>
        <label for="nrp" id="nama">NRP</label>
        <input type="text" name="nrp" id="nrp">
        <br>
        <label for="status" id="status">Status</label>
        <input type="text" name="status" id="status">
        <br>

        <button name="submit">Tambahkan</button>
    </form>
@endsection