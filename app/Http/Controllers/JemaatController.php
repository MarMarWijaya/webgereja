<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jemaat;
use App\Models\Pengumuman;
use App\Models\Renungan;
use Exception;
use File;
use Storage;
use Illuminate\Support\Facades\Mail;

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
        try{
            $pass = $request->password;
            $jemaat = new Jemaat([
                'password' => $pass,
                'nama' => $request->nama,
                'kk' => $request->kk,
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

            $jemaatTerbaru = Jemaat::latest()->first();
            $dataJemaatTerbaru = 
            "<?xml version='1.0' encoding='UTF-8'?>
            <data>
            <nij>".$jemaatTerbaru['nij']."</nij>
            <nama>".$jemaatTerbaru['nama']."</nama>
            <kk>".$jemaatTerbaru['kk']."</kk>
            <gender>".$jemaatTerbaru['gender']."</gender>
            <alamat>".$jemaatTerbaru['alamat']."</alamat>
            <ayah>".$jemaatTerbaru['nama_ayah']."</ayah>
            <ibu>".$jemaatTerbaru['nama_ibu']."</ibu>
            <pasangan>".$jemaatTerbaru['nama_pasangan']."</pasangan>
            <goldar>".$jemaatTerbaru['gol_darah']."</goldar>
            </data>";
            Storage::disk('local')->put('file.xml', $dataJemaatTerbaru);

            $email = 'marmarwijaya7@gmail.com';
            
            Mail::send('templateEmail', $jemaatTerbaru->toArray(), function($mail) use($email) {
                $mail->to($email)
                        ->subject("Data Jemaat Terbaru");
                $mail->from('mariowijaya31@gmail.com', 'Gerejaku');

                $mail->attach(storage_path("app/file.xml"));
            });
    
            // Cek kegagalan
            if (Mail::failures()) {
                return "Gagal mengirim Email";
            }



            $respon = [
                'status' => 'Berhasil',
                'msg' => 'Registrasi berhasil',
            ];
            return $respon;
        }catch(Exception $e){
            $respon = [
                'status' => 'Gagal',
                'msg' => 'Registrasi gagal',
            ];
            return $respon;
        }
        
    }

    public function getAllPengumuman(){
        $data = Pengumuman::all();
        return response()->json($data, 200);
    }

    public function getPengumumanByID(Request $req){
        $data = Pengumuman::find($req->id);
        return response()->json($data, 200);
    }

    public function getAllRenungan(){
        $data = Renungan::all();
        return response()->json($data, 200);
    }

    public function getRenunganByID(Request $req){
        $data = Renungan::find($req->id);
        return response()->json($data, 200);
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
