<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengumuman;
use App\Models\Jemaat;
use Exception;
use Illuminate\Support\Facades\DB;

class ManajemenPengumumanController extends Controller
{
    public function index(){
        $data = Pengumuman::join('jemaat', 'pengumuman.nij', '=', 'jemaat.nij')
               ->select(['pengumuman.*', 'jemaat.nama'])
               ->paginate(10);
        $penulis = Jemaat::all();
        return view('manajemenpengumuman', ['data' => $data, 'penulis' => $penulis]);
    }

    public function tambah(Request $req){
        try{
            $image = $req->file('lampiran');

            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('lampiran'), $new_name);

            Pengumuman::create([
                'lampiran' => $new_name,
                'judul' => $req->judul,
                'isi' => $req->isi,
                'nij' => $req->penulis
            ]);
            return redirect('/pengumuman');
        }
        catch(Exception $e){
            
        }
    }

    public function getPengumumanByID($id){
        $data = DB::table('pengumuman')
        ->join('jemaat', 'pengumuman.nij', '=', 'jemaat.nij')
        ->where('pengumuman.idPengumuman', '=', $id)
        ->select('pengumuman.*', 'jemaat.nama')
        ->get();
        return view('detailPengumuman', ['data' => $data]);
    }

    public function hapus($id){
        $data = Pengumuman::find($id);
        $data->delete();
        return redirect('/pengumuman');
    }

    public function viewEdit($id){
        $data = Pengumuman::find($id);
        $penulis = Jemaat::all();
        return view('editpengumuman', ['data' => $data, 'penulis' => $penulis]);
    }

    public function edit(Request $req){
        if($req->file('lampiran') != null){
            $image = $req->file('lampiran');

            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('lampiran'), $new_name);

            $data = Pengumuman::find($req->idPengumuman);
            $data->judul = $req->judul;
            $data->isi = $req->isi;
            $data->tanggal = $req->tanggal;
            $data->lampiran = $new_name;
            $data->nij = $req->penulis;
            $data->save();
        }else{
            $data = Pengumuman::find($req->idPengumuman);
            $data->judul = $req->judul;
            $data->isi = $req->isi;
            $data->tanggal = $req->tanggal;
            $data->nij = $req->penulis;
            $data->save();
        }
        
        return redirect('/pengumuman');
    }
    
}
