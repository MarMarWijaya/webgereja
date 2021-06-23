<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Renungan;
use App\Models\Jemaat;
use Illuminate\Support\Facades\DB;
use Auth;

class ManajemenRenunganController extends Controller
{
    public function index(){
        // $data = Renungan::all();
        $data = Renungan::join('jemaat', 'renungan.nij', '=', 'jemaat.nij')
               ->get(['renungan.*', 'jemaat.nama']);
        $penulis = Jemaat::all();
        return view('manajemenrenungan', ['data' => $data, 'penulis' => $penulis]);
    }

    public function tambah(Request $req){
        try{
            $image = $req->file('lampiran');

            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('lampiran'), $new_name);

            Renungan::create([
                'lampiran' => $new_name,
                'judul' => $req->judul,
                'isi' => $req->isi,
                'nij' => $req->penulis
            ]);
            return redirect('/renungan');
        }
        catch(Exception $e){
            
        }
    }

    public function getRenunganByID($id){
        $data = DB::table('renungan')
        ->join('jemaat', 'renungan.nij', '=', 'jemaat.nij')
        ->where('renungan.idRenungan', '=', $id)
        ->select('renungan.*', 'jemaat.nama')
        ->get();
        return view('detailRenungan', ['data' => $data]);
    }

    public function hapus($id){
        $data = Renungan::find($id);
        $data->delete();
        return redirect('/renungan');
    }

    public function viewEdit($id){
        $data = Renungan::find($id);
        $penulis = Jemaat::all();
        return view('editrenungan', ['data' => $data, 'penulis' => $penulis]);
    }

    public function edit(Request $req){
        if($req->file('lampiran') != null){
            $image = $req->file('lampiran');

            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('lampiran'), $new_name);

            $data = Renungan::find($req->idRenungan);
            $data->judul = $req->judul;
            $data->isi = $req->isi;
            $data->tanggal = $req->tanggal;
            $data->lampiran = $new_name;
            $data->nij = $req->penulis;
            $data->save();
        }else{
            $data = Renungan::find($req->idRenungan);
            $data->judul = $req->judul;
            $data->isi = $req->isi;
            $data->tanggal = $req->tanggal;
            $data->nij = $req->penulis;
            $data->save();
        }
        
        return redirect('/renungan');
    }
    
}
