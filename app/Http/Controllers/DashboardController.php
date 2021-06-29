<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jemaat;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function login(Request $req)
    {
        $password = md5($req->password);
        if($req->username == 'admin' && $password == '21232f297a57a5a743894a0e4a801fc3')
        {
            return view('dashboard');
        }
    }

    public function index()
    {
        $jumlahJemaat = DB::table('jemaat')->count();
        $jumlahHome = DB::table('home')->count();
        return view('dashboard', ['jumlahJemaat' => $jumlahJemaat, 'jumlahHome' => $jumlahHome]);
    }
}
