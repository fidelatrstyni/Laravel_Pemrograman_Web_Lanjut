<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    /*public function index() {
        $nama = 'Fidela Trisaktiyani'; //ubah dengan nama kalian
        return view('biodata' , ['nama' => $nama]);
    }  */ 
    
    public function index() {
        $nama = 'Fidela Trisaktiyani'; //ubah dengan nama kalian
        $materi = ["Web Design", "Web Programming", "Digital
        Marketing","Graphic Design"];
        return view('biodata' , ['nama' => $nama, 'materi' =>
        $materi]);
    }
}
