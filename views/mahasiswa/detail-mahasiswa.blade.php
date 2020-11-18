@extends('layouts.app')

@section('content')
        <div class="py-4 d-flex justify-contetnt-end align-items-center">
            <h2 class="mr-auto">Detail {{$mahasiswa->nama}}</h2>
            <a href="{{route('mahasiswas.edit',['mahasiswa'=>$mahasiswa->id])}}" class="btn btn-primary">
                Edit Data mahasiswa
            </a>
        <form action="{{route('mahasiswas.delete',['mahasiswa' => $mahasiswa->id])}}"
            method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger ml-3">Hapus</button>
        </form>
        </div>

        <ul>
        <li>NIM : {{$mahasiswa->nim}}</li>
        <li>Nama : {{$mahasiswa->nama}}</li>
        <li>Tempat Lahir : {{$mahasiswa->tempat_lahir}}</li>
        <li>Tanggal Lahir : {{$mahasiswa->tanggal_lahir}}</li>
        <li>Fakultas : {{$mahasiswa->fakultas}}</li>
        <li>Jurusan : {{$mahasiswa->jurusan}}</li>
        <li>IPK : {{$mahasiswa->ipk}}</li>
        <li>Diinput pada : {{$mahasiswa->created_at}}</li>
        <li>Diupdate pada : {{$mahasiswa->updated_at}}</li>
        </ul>
@endsection