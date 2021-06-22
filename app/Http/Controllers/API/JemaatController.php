<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Kecamatan;
use Validator;
use App\Http\Resources\Kecamatan as KecamatanResource;
use Illuminate\Support\Facades\DB;

class JemaatController extends BaseController
{
    public function index()
    {
        $allData = Kecamatan::all();
        return KecamatanResource::collection($allData);
        //return $allData;
    }
}
