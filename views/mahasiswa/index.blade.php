@extends('layouts.app')

@section('content')
    <table class="table table-striped">
        <div class="py-4 d-flex justify-content-end align-items-center">
            <h2 class="mr-auto">Data Mahasiswa</h2>
            <a href="{{route('mahasiswas.create')}}" class="btn btn-primary">
                Tambah Data
            </a>
        </div>
        @if (session()->has('pesan'))
            <div class="alert alert-success">
                {{session()->get('pesan')}}
            </div>
        @endif
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Fakultas</th>
                <th scope="col">Jurusan</th>
                <th scope="col">IPK</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($mahasiswas as $mahasiswa)
            <tr>
                <th>{{$loop->iteration}}</th>
                <td><a href="{{route('mahasiswas.detail',['mahasiswa'=>$mahasiswa->id])}}">
                {{$mahasiswa->nim}}</a></td>
                <td>{{$mahasiswa->nama}}</td>
                <td>{{$mahasiswa->tempat_lahir}}</td>
                <td>{{$mahasiswa->tanggal_lahir}}</td>
                <td>{{$mahasiswa->fakultas}}</td>
                <td>{{$mahasiswa->jurusan}}</td>
                <td>{{$mahasiswa->ipk}}</td>
            </tr>
            @empty
                <td colspan="4" class="text-center"> Data mahasiswa tidak ada...</td>
            @endforelse

        </tbody>
    </table>
@endsection