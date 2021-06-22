<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengumuman;
class ManajemenPengumumanController extends Controller
{
    public function index(){
        $data = Pengumuman::all();
        return view('manajemenpengumuman', ['data' => $data]);
    }
    
}
