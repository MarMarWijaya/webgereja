<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jemaat;
class ManajemenJemaatController extends Controller
{
    public function index(){
        $data = Jemaat::all();
        return view('manajemenjemaat', ['data' => $data]);
    }
}
