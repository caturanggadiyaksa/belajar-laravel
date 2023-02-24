<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaCOntroller extends Controller
{
    //
    public function index() {
        $anggota = Anggota::get();

        return view('anggota', ['anggota' => $anggota]);
    }
}
