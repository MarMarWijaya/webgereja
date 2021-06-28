<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class ManajemenHomeController extends Controller
{
    public function index(){
        $data = Home::all();
        return view('manajemenhome', ['data' => $data]);
    }

    public function tambah(Request $req){
        Home::create([
            'nama_home' => $req->home
        ]);
        return redirect('/home');
    }

    public function viewEdit($id){
        $data = Home::find($id);
        return view('edithome', ['editData' => $data]);
    }

    public function edit(Request $req){
        $data = Home::find($req->id);
        $data->nama_home = $req->nama;
        $data->save();
        return redirect('/home');
    }

    public function hapus($id){
        $data = Home::find($id);
        $data->delete();
        return redirect('/home');
    }
}
