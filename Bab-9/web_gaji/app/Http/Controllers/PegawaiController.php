<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index() {
        //mengambil data dari table pegawai
        $pegawai = DB::table('tablepegawai')->get();

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
}
