<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PegawaiController extends Controller
{
    //
    public function index() {
        //mengambil data dari table pegawai
        $pegawai = DB::table('tablepegawai')->get();

        //mengirim data pegawai ke view index
        return view('index', ['pegawai' => $pegawai]);
    }
}
