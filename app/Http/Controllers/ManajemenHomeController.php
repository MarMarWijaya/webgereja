<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use Illuminate\Support\Facades\DB;
class ManajemenHomeController extends Controller
{
    public function index(){
        $data = DB::table('home')->paginate(10);
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
