<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Pengujian;
use App\Perusahaan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input; 
use Validator;
 

class TransaksiController extends Controller
{ 
    public $successStatus = 200;

    public function index()
    {
        
        $data = Pengujian::all();
        if(count($data) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json(['success'=>$data], $this->successStatus);
        }
        else{
            return response()->json(['success'=>'Data Kosong'], $this->successStatus);
        }

    //     $id='PG00000004';
    //     $data['data']=Pengujian::where('id_pengujian','PG00000004')->get();
    //   return view('tes', $data);
      //  print_r($data['data']);
    }

    public function store(Request $request)
    {
        //$id_perusahaan = Perusahaan::getIDPerusahaan(Auth::user()->id);
        $id_perusahaan =  $request->input('id_perusahaan');
        $total_harga = $request->input('total_harga');
        $id_barang = $request->input('id_barang');
        $data = new Pengujian();
        $data->id_perusahaan = $id_perusahaan;
        $data->total_harga = $total_harga;
        $data->id_barang = $id_barang;

        if($data->save()){
            return response()->json(['success'=>$data], $this->successStatus);
        }
    }

    public function addBuktiBayar(Request $request, $id)
    {   
        if($file=$request->file('bukti_pembayaran')){
                if($file->getClientOriginalExtension()=="png" or $file->getClientOriginalExtension()=="jpg" or $file->getClientOriginalExtension()=="jpeg"){
                    $name=sha1($file->getClientOriginalName().time()).".".$file->getClientOriginalExtension();
                    $file->move('buktibayar',$name);
                    $berkas=$name;
                }else{
                    return response()->json(['error'=>'File tidak didukung'], $this->successStatus);
                }
        }
        $id_petugas_admin = $request->input('id_petugas_admin');
        $bukti_pembayaran = $berkas;
        $data = Pengujian::where('id_pengujian',$id)->first();
        $data->id_petugas_admin = $id_petugas_admin;
        $data->bukti_pembayaran = $bukti_pembayaran;

        if($data->save()){
            return response()->json(['success'=>$data], $this->successStatus);
        }else{
            return response()->json(['error'=>'Error'], $this->successStatus);
        }
    }

    public function hasilPengujian(Request $request, $id)
    {
        $id_petugas_lab = $request->input('id_petugas_lab');
        $hasil_pengujian = $request->input('hasil_pengujian');
        $data = Pengujian::where('id_pengujian',$id)->first();
        $data->id_petugas_lab = $id_petugas_lab;
        $data->hasil_pengujian = $hasil_pengujian;
        $data->status_pengujian = "Selesai";

        if($data->save()){
            return response()->json(['success'=>$data], $this->successStatus);
        }else{
            return response()->json(['error'=>'Error'], $this->successStatus);
        }
    }

    public function show($id)
    {
        $data = Pengujian::find($id);
        if(count($data) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json(['success'=>$data], $this->successStatus);
        }
        else{
            return response()->json(['error'=>'Error'], $this->successStatus);
        }
    }

    public function destroy($id)
    {
        $data = Pengujian::where('id_pengujian',$id)->first();
        if($data->delete()){
            return response()->json(['success'=>'Berhasil dihapus'], $this->successStatus);
        }
        else{
            return response()->json(['error'=>'Error'], $this->successStatus);
    }
}

}
