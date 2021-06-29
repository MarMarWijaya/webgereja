<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jemaat;
use App\Models\Home;
use Illuminate\Support\Facades\DB;

class ManajemenJemaatController extends Controller
{
    public function index(){
        $data = Jemaat::all();
        $dataHome = Home::all();
        return view('manajemenjemaat', ['data' => $data, 'dataHome' => $dataHome]);
    }

    public function tambah(Request $req){
        Jemaat::create([
            'password' => $req->nama,
            'nama' => $req->nama,
            'kk' => $req->kk,
            'gender' => $req->gender,
            'alamat' => $req->alamat,
            'ttl' => $req->ttl,
            'hp' => $req->hp,
            'nama_ayah' => $req->ayah,
            'nama_ibu' => $req->ibu,
            'nama_pasangan' => $req->pasangan,
            'gol_darah' => $req->goldar,
            'idDesa' => $req->desa,
            'idHome' => $req->home,
            'idMentor' => $req->mentor
        ]);
        return redirect('/datajemaat');
    }

    public function getDataByNIJ($nij){
        $data = Jemaat::find($nij);
        $id = $data['idHome'];
        $dataHome = Home::find($id);
        return view('detailjemaat', ['data' => $data, 'home' => $dataHome]);
    }

    public function hapus($nij){
        $data = Jemaat::find($nij);
        $data->delete();
        return redirect('/datajemaat');
    }

    public function viewEdit($nij){
        $data = Jemaat::find($nij);
        $id = $data['idHome'];
        $dataHome = Home::all();
        if($id != null){
            $namaHome = Home::find($id)->get('nama_home');
        }else{
            $namaHome = "Belum diketahui";
        }
        return view('editjemaat', ['editData' => $data, 'dataHome' => $dataHome, 'namaHome' => $namaHome]);
    }

    public function edit(Request $req){
     
        $data = Jemaat::find($req->nij);
        $data->nama = $req->nama;
        $data->kk = $req->kk;
        $data->gender = $req->gender;
        $data->alamat = $req->alamat;
        $data->ttl = $req->ttl;
        $data->hp = $req->hp;
        $data->nama_ayah = $req->ayah;
        $data->nama_ibu = $req->ibu;
        $data->nama_pasangan = $req->pasangan;
        $data->gol_darah = $req->goldar;
        $data->idDesa = $req->desa;
        $data->idHome = $req->home;
        $data->idMentor = $req->mentor;
        $data->save();

        return redirect('/datajemaat');
    }

    public function getDataByKK($kk){
        $data = Jemaat::where('kk', '=', $kk)->get();
        //$data = DB::table('jemaat')->where('kk', '=', $kk)->get();
        return view('jemaatbykk', ['kk' => $data, 'noKK' => $kk]);
    }
}
