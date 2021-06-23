<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class AdministrasiController extends Controller
{
    public function index(){
        return view('administrasi');
    }

    public function cetak(Request $req){
        $data = [
            'nama' => $req->nama,
            'namaBaptis' => $req->namaBaptis,
            'tanggalBaptis' => $req->tanggalBaptis,
            'tanggalLahir' => $req->tanggalLahir,
            'ayah' => $req->ayah,
            'ibu' => $req->ibu,
            'pendeta' => $req->pendeta,
            'mentor' => $req->mentor
        ];

        $namafile = "Surat Baptis ".$req->nama.'.pdf';
        $pdf = PDF::loadview('suratbaptis',['data'=>$data]);
        return $pdf->download($namafile);
    }
}
