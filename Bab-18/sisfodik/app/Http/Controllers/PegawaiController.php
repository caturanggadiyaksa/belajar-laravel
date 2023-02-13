<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    //
    public function index() {
        //mengambil data pegawai
        $pegawai = Pegawai::all();
        //mengirim pegawai ke view pegawai
        return view('pegawai', ['pegawai' => $pegawai]);
    }


    public function tambah() {
        return view('pegawai_tambah');
    }

    public function store(Request $request) {

        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required'
        ]);

        Pegawai::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat
        ]);

        return redirect('/pegawai');
    }
}
