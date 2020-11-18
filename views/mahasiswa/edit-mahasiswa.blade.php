@extends('layouts.app')

@section('content')
        <h1>Ubah data mahasiswa</h1>
    <form action="{{route('mahasiswas.update',['mahasiswa'=>$mahasiswa->id])}}" method="POST">
    @method('PUT')
    @csrf
        <div class="form-group">
            <label for="nim">NIM</label>
            <div>
                <input type="text" class="form-control
                    @error('nim') is-invalid @enderror"
                    id="nim" name="nim" value="{{old('nim') ?? $mahasiswa->nim}}">
                @error('nim')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <div>
                <input type="text" class="form-control
                    @error('nama') is-invalid @enderror"
                    id="nama" name="nama" value="{{old('nama') ?? $mahasiswa->nama}}">
                @error('nama')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="tempat_lahir">Tempat lahir</label>
            <div>
                <input type="text" class="form-control
                    @error('tempat_lahir') is-invalid @enderror"
                    id="tempat_lahir" name="tempat_lahir" value="{{old('tempat_lahir') ?? $mahasiswa->tempat_lahir}}">
                @error('tempat_lahir')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <div>
                <input type="text" class="form-control
                    @error('tanggal_lahir') is-invalid @enderror"
                    id="tanggal_lahir" name="tanggal_lahir" value="{{old('tanggal_lahir') ?? $mahasiswa->tanggal_lahir}}">
                @error('tanggal_lahir')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="fakultas">Fakultas</label>
            <div>
                <input type="text" class="form-control
                    @error('fakultas') is-invalid @enderror"
                    id="fakultas" name="fakultas" value="{{old('fakultas') ?? $mahasiswa->fakultas}}">
                @error('fakultas')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <div>
                <input type="text" class="form-control
                    @error('jurusan') is-invalid @enderror"
                    id="jurusan" name="jurusan" value="{{old('jurusan') ?? $mahasiswa->jurusan}}">
                @error('jurusan')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="ipk">IPK</label>
            <div>
                <input type="text" class="form-control
                    @error('ipk') is-invalid @enderror"
                    id="ipk" name="ipk" value="{{old('ipk') ?? $mahasiswa->ipk}}">
                @error('ipk')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary">update</button>
    </form>
@endsection