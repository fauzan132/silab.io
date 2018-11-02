<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Pengujian;
use Illuminate\Support\Facades\Auth;
use Validator;
 

class PengujianController extends Controller
{ 
    public function index()
    {
        //
        $data = Pengujian::all();

        if(count($data) > 0){ //mengecek apakah data kosong atau tidak
            $res['message'] = "Success!";
            $res['values'] = $data;
            return response($res);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
    }

    public function store(Request $request)
    {
        $id_petugas_admin = $request->input('id_petugas_admin');
        $id_petugas_lab = $request->input('id_petugas_lab');
        $id_perusahaan = $request->input('id_perusahaan');
        $total_harga = $request->input('total_harga');
        $bukti_pembayaran = $request->input('bukti_pembayaran');
        $status_pengujian = $request->input('status_pengujian');
        $hasil_pengujian = $request->input('hasil_pengujian');
        $data = new Pengujian();
        $data->id_petugas_admin = $id_petugas_admin;
        $data->id_petugas_lab = $id_petugas_lab;
        $data->id_perusahaan = $id_perusahaan;
        $data->total_harga = $total_harga;
        $data->bukti_pembayaran = $bukti_pembayaran;
        $data->status_pengujian = $status_pengujian;
        $data->hasil_pengujian = $hasil_pengujian;

        if($data->save()){
            $res['message'] = "Success!";
            $res['value'] = "$data";
            return response($res);
        }
    }

    public function show($id)
    {
        $data = Pengujian::find($id);
        if(count($data) > 0){ //mengecek apakah data kosong atau tidak
            $res['message'] = "Success!";
            $res['values'] = $data;
            return response($res);
        }
        else{
            $res['message'] = "Failed!";
            return response($res);
        }
    }

}
