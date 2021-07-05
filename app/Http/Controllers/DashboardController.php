<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jemaat;
use Illuminate\Support\Facades\DB;
use App\Charts\JemaatChart;

class DashboardController extends Controller
{
    public function login(Request $req)
    {
        $password = md5($req->password);
        if ($req->username == 'admin' && $password == '21232f297a57a5a743894a0e4a801fc3') {
            return view('dashboard');
        }
    }

    public function index()
    {
        $jumlahJemaat = DB::table('jemaat')->count();
        $jumlahHome = DB::table('home')->count();
        $jumlahPengumuman = DB::table('pengumuman')->count();
        $jumlahRenungan = DB::table('renungan')->count();
        $dataTahun = DB::table('jemaat')->selectRaw('COUNT(nij) as jumlah, YEAR(created_at) as tahun')->groupby('tahun')->get();
        $array = json_decode($dataTahun, true);
        $maxIndex = count($array) - 1;
        $index = 0;
        $avg = 0;
        for ($i = 0; $i < 2; $i++) {
            $avg += $array[$maxIndex]['jumlah'];
            $maxIndex--;
        }

        $avg = $avg / 2;

        return view(
            'dashboard',
            [
                'jumlahJemaat' => $jumlahJemaat,
                'jumlahHome' => $jumlahHome,
                'tahun' => $dataTahun,
                'avg' => $avg,
                'jumlahPengumuman' => $jumlahPengumuman,
                'jumlahRenungan' => $jumlahRenungan
            ]
        );
    }
}
