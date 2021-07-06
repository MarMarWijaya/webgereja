<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class AdministrasiController extends Controller
{
    public function index()
    {
        return view('administrasi');
    }

    public function cetak(Request $req)
    {
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
        // $customPaper = array(0, 0, 283.80, 567.00);
        // $namafile = "Surat Baptis " . $req->nama . '.pdf';
        // $pdf = PDF::loadview('suratbaptis', ['data' => $data])->setPaper('a4', 'landscape');
        // return $pdf->download($namafile);
        return view('suratbaptis', ['data' => $data]);
    }
}
