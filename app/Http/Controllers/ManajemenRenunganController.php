<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Renungan;
class ManajemenRenunganController extends Controller
{
    public function index(){
        $data = Renungan::all();
        return view('manajemenrenungan', ['data' => $data]);
    }
}
