<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $nama = "Adi Rahman Hakim";

        $pelajaran = ["Fiqih","Aqidah","Ilmu Hadist","Illmu Tafsir"];

        $skill = ["Designer", "Video Editor","Programmer","Writer"];

        return view('biodata', ['nama' => $nama , 'matkul' => $pelajaran , 'keahlian' => $skill ]);
    }
}
