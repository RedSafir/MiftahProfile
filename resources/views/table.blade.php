@extends('layout/main')

@section('container')
    <a href="/tambah/">Tambah</a>
    <table class="table table-dark table-sm">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">nama</th>
                <th scope="col">nrp</th>
                <th scope="col">perintah</th>
            </tr>
        </thead>
        @php
            $i = 1;
        @endphp
        <tbody class="table-group-divider">
            @foreach ($mahasiswa as $mhs)
            <tr>
                <th scope="row">{{ $i++ }}</th>
                <td>{{ $mhs->nama }}</td>
                <td>{{ $mhs->nrp }}</td>
                <td>
                    <a href="/main/{{ $mhs->id }}/edit">Ubah</a>
                    <form action="/main/{{ $mhs->id }}" method="POST">
                        @csrf
                        @method("delete")
                        <button valur="delete">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
@endsection