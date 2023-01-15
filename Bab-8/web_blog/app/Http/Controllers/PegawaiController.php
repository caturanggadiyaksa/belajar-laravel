<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PegawaiController extends Controller
{
    //
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

    //alihkan redirect ke halaman pegawai
    //return redirect('/pegawai');
}
