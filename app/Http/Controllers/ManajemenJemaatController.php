<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jemaat;
use App\Models\Home;
use App\Models\Desa;
use Illuminate\Support\Facades\DB;

class ManajemenJemaatController extends Controller
{
    public function index(){
        $data = DB::table('jemaat')->paginate(5);
        $dataHome = Home::all();
        $dataDesa = Desa::all();
        return view('manajemenjemaat', ['data' => $data, 'dataHome' => $dataHome, 'dataDesa' => $dataDesa]);
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
        $idDesa = $data['idDesa'];
        $idMentor = $data['idMentor'];
        $dataHome = Home::find($id);
        $dataDesa = Desa::find($idDesa);
        $dataMentor = Jemaat::find($idMentor);
        return view('detailjemaat', ['data' => $data, 'home' => $dataHome, 'desa' => $dataDesa, 'mentor' => $dataMentor]);
    }

    public function hapus($nij){
        $data = Jemaat::find($nij);
        $data->delete();
        return redirect('/datajemaat');
    }

    public function viewEdit($nij){
        $data = Jemaat::find($nij);
        $id = $data['idHome'];
        $idDesa = $data['idDesa'];
        $idMentor = $data['idMentor'];
        $dataHome = Home::all();
        $dataDesa = Desa::all();
        $dataMentor = Jemaat::all();
        if($id != null){
            $namaHome = Home::find($id)->get('nama_home');
        }else{
            $namaHome = "Belum diketahui";
        }

        if($idDesa != null){
            $namaDesa = Desa::find($idDesa)->get('Nama_Desa');
        }else{
            $namaDesa = "Belum diketahui";
        }

        if($idMentor != null){
            $namaMentor = Jemaat::find($idMentor)->get('nama');
        }else{
            $namaMentor = "Belum diketahui";
        }
        
        return view('editjemaat', 
        [
            'editData' => $data, 
            'dataHome' => $dataHome, 
            'dataDesa' => $dataDesa, 
            'dataMentor' => $dataMentor,
            'namaHome' => $namaHome, 
            'namaDesa' => $namaDesa,
            'namaMentor' => $namaMentor
        ]);
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
