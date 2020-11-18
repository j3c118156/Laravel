<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
   public function index()
   {
       $mahasiswas = Mahasiswa::all();
       return view('mahasiswa.index', ['mahasiswas'=>$mahasiswas]);
   }

   public function create()
   {
       return view('form-mahasiswa');
   }

   public function store(Request $request)
   {
       $validateData = $request->validate([
           'nim' => 'required|size:9|unique:mahasiswas',
           'nama' => '',
           'tempat_lahir' => '',
           'tanggal_lahir' => '',
           'fakultas' => '',
           'jurusan' => '',
           'ipk' => '',
       ]);

       //mass assignment

       Mahasiswa::create($validateData);
       $request->session()->flash('pesan',"Data Berhasil Diitambahkan");
       return redirect()->route('mahasiswa.index');
   }

   public function detail($mahasiswa)
   {
       $result=Mahasiswa::find($mahasiswa);
       return view('mahasiswa.detail-mahasiswa', ['mahasiswa'=>$result]);
   }

   public function edit($mahasiswa){
       $result=Mahasiswa::find($mahasiswa);
       return view('mahasiswa.edit-mahasiswa',['mahasiswa'=>$result]);
   }

   public function update(Request $request, Mahasiswa $mahasiswa)
   {
       $validateData = $request->validate([
        'nim' => 'required|size:9|unique:mahasiswas,nim,'.$mahasiswa->id,
        'nama' => '',
        'tempat_lahir' => '',
        'tanggal_lahir' => '',
        'fakultas' => '',
        'jurusan' => '',
        'ipk' => '',
       ]);

       Mahasiswa::where('id',$mahasiswa->id)->update($validateData);
       $request->session()->flash('pesan',"Data berhasil diperbarui");
       return redirect()->route('mahasiswas.detail',['mahasiswa'=>$mahasiswa->id]);
   }

   public function delete(Mahasiswa $mahasiswa)
   {
       $mahasiswa->delete();
       return redirect()->route('mahasiswa.index')->with('pesan',"Data berhasil dihapus");
   }
}


 
