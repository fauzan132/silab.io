<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Barang;
use App\Pengujian;
use App\Perusahaan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input; 
use Validator;
use DateTime;
 

class TransaksiController extends Controller
{ 
    public $successStatus = 200;

    public function index()
    {
        
        $data = Pengujian::getBarang();
        if(count($data) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json(['success'=>$data], $this->successStatus);
        }
        else{
            return response()->json(['success'=>'Data Kosong'], $this->successStatus);
        }

        // $id='PG00000005';
        // $data['data']=Pengujian::where('id_pengujian',$id)->get();
        // return view('tes', $data);
        // print_r($data['data']);
    }

    public function selectByPerusahaan($id)
    {
        $data = Pengujian::getPengujianDetail($id);
        if(count($data) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json(['success'=>$data], $this->successStatus);
        }
        else{
            return response()->json(['success'=>'Data Kosong'], $this->successStatus);
        }

        // $id='PG00000005';
        // $data['data']=Pengujian::where('id_pengujian',$id)->get();
        // return view('tes', $data);
        // print_r($data['data']);
    }

    public function store(Request $request)
    {
        //$id_perusahaan = Perusahaan::getIDPerusahaan(Auth::user()->id);
        $id_perusahaan =  $request->input('id_perusahaan');
        $id_barang = $request->input('id_barang');
        $jumlah_barang = $request->input('jumlah_barang');
        $total_harga = $request->input('total_harga');
        $data = new Pengujian();
        $data->id_perusahaan = $id_perusahaan;
        $data->id_barang = $id_barang;
        $data->jumlah_barang = $jumlah_barang;
        $data->total_harga = $total_harga;
        

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
        // $id_petugas_admin = $request->input('id_petugas_admin');
        $tgl_bayar = new DateTime('Asia/Jakarta');
        $bukti_pembayaran = $berkas;
        $data = Pengujian::where('id_pengujian',$id)->first();
        // $data->id_petugas_admin = $id_petugas_admin;
        $data->tgl_bayar = $tgl_bayar;
        $data->bukti_pembayaran = $bukti_pembayaran;

        if($data->save()){
            return response()->json(['success'=>$data], $this->successStatus);
        }else{
            return response()->json(['error'=>'Error'], $this->successStatus);
        }
    }

    public function verifikasiBayar(Request $request, $id)
    {
        $tgl_verifikasi = $request->input('tgl_verifikasi');
        $data = Pengujian::where('id_pengujian',$id)->first();
        $data->tgl_verifikasi = $tgl_verifikasi;
        $data->status_pengujian = "Sedang Diproses";

        if($data->save()){
            return response()->json(['success'=>$data], $this->successStatus);
        }else{
            return response()->json(['error'=>'Error'], $this->successStatus);
        }
    }

    public function verifikasiBarang(Request $request, $id)
    {
        $tgl_barang_diterima = $request->input('tgl_barang_diterima');
        $data = Pengujian::where('id_pengujian',$id)->first();
        $data->tgl_barang_diterima = $tgl_barang_diterima;

        if($data->save()){
            return response()->json(['success'=>$data], $this->successStatus);
        }else{
            return response()->json(['error'=>'Error'], $this->successStatus);
        }
    }

    public function hasilPengujian(Request $request, $id)
    {
        if($file=$request->file('hasil_pengujian')){
            if($file->getClientOriginalExtension()=="png" or $file->getClientOriginalExtension()=="jpg" or $file->getClientOriginalExtension()=="jpeg"){
                $name=sha1($file->getClientOriginalName().time()).".".$file->getClientOriginalExtension();
                $file->move('hasilpengujian',$name);
                $berkas=$name;
            }else{
                return response()->json(['error'=>'File tidak didukung'], $this->successStatus);
            }
    }
        $id_petugas_lab = $request->input('id_petugas_lab');
        $tgl_barang_selesai = new DateTime('Asia/Jakarta');
        // $hasil_pengujian = $request->input('hasil_pengujian');
        $hasil_pengujian = $berkas;
        $data = Pengujian::where('id_pengujian',$id)->first();
        $data->id_petugas_lab = $id_petugas_lab;
        $data->tgl_barang_selesai = $tgl_barang_selesai;
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

