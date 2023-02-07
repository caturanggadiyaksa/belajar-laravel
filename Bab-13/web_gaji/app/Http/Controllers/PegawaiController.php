<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index() {
        //mengambil data dari table pegawai
        $pegawai = DB::table('tablepegawai')->paginate(10);

        //mengirim data pegawai ke view index
        return view('index', ['pegawai' => $pegawai]);
    }

    //method untuk menampilkan view form tambah pegawai
    public function tambah() {
        //memanggil view tambah
        return view('tambah');
    }

    //method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        //insert data ke table pegawai
        DB::table('tablepegawai')->insert([
            'id' => NULL,
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'umur' => $request->umur,
            'alamat' => $request->alamat
        ]);
        //alihkan redirect ke halaman pegawai
        return redirect('/pegawai');
    }

    //method untuk edit data pegawai
    public function edit($id) {
        //mengambil data pegawai berdasrkan id
        $pegawai = DB::table('tablepegawai')->where('id',$id)->get();

        //pasing data pegawai yang didapat ke view edit.blade.php
       
        return view('edit', ['pegawai' => $pegawai]);
    }

    //update pegawai
    public function update(Request $request){

        //update data pegawai
        DB::table('tablepegawai')->where('id',$request->id)->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'umur' => $request->umur,
            'alamat' => $request->alamat
        ]);

        return redirect('/pegawai');
    }

    //method untuk hapus data pegawai berdasarkan id
    public function hapus($id) {
        DB::table('tablepegawai')->where('id',$id)->delete();
        return redirect('/pegawai');
    }

    //method untuk cari
    public function cari(Request $request){
        //menangkap data pencarian
        $cari = $request->cari;

        //mengambil data dari table pegawai sesuai pencarian data
        $pegawai = DB::table('tablepegawai')
        ->where('nama','like',"%".$cari."%")
        ->paginate();

        //mengirim data pegawai ke view index
        return view('index',['pegawai' => $pegawai]);
    }
}
