<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jemaat;

class JemaatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Jemaat::all();

        return $contacts;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function login(Request $request) {
        $nij = $request->nij;
        $password = $request->password;

        $data = Jemaat::find($nij);
        if($data->password != $password){
            $respon = [
                'status' => 'gagal',
                'msg' => 'Login Gagal',
            ];
            return response()->json($respon, 401);
        }else{
            return response()->json($data, 200);
        }
    }

    public function registrasi(Request $request) {
        $pass = md5($request->password);

        $jemaat = new Jemaat([
            'password' => $pass,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'alamat' => $request->alamat,
            'ttl' => $request->ttl,
            'hp' => $request->hp,
            'nama_ayah' => $request->ayah,
            'nama_ibu' => $request->ibu,
            'nama_pasangan' => $request->pasangan,
            'gol_darah' => $request->goldar,
            'idDesa' => $request->desa,
            'idHome' => $request->home,
            'idMentor' => $request->mentor
        ]);

        $jemaat->save();
        $respon = [
            'status' => 'Berhasil',
            'msg' => 'Registrasi berhasil',
        ];
        return $respon;
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
