<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Pengujian extends Model
{
     protected $table='pengujian';
     protected $primaryKey='id_pengujian';
     public $incrementing =false;
     public $timestamps=true;
     protected $fillable = [
       'id_petugas_admin','id_petugas_lab','id_perusahaan','total_harga','bukti_pembayaran','status_pengujian',
       'hasil_pengujian','created_at','updated_at',
     ];

     public static function getBarang(){
      return $data = Barang::select('*')
       ->join('pengujian', 'barang.id_barang','=','pengujian.id_barang')
       ->join('laboratorium', 'barang.id_lab','=','laboratorium.id_lab')
       ->select('pengujian.*', 'barang.nama_barang','laboratorium.nama_lab')
       ->get();
    }

    public static function getPengujianDetail($id){
      return $data = DB::table('pengujian')
       ->join('barang', 'pengujian.id_barang','=','barang.id_barang')
       ->join('laboratorium', 'barang.id_lab','=','laboratorium.id_lab')
       ->select('pengujian.*', 'barang.nama_barang','laboratorium.nama_lab')
       ->where('pengujian.id_perusahaan', $id)
       ->get();
    }


    public static function getDataPengujianLab(){
      return $data = Pengujian::select('*')
       ->join('barang', 'pengujian.id_barang','=','barang.id_barang')
       ->join('perusahaan', 'pengujian.id_perusahaan','=','perusahaan.id_perusahaan')
       ->select('pengujian.*', 'barang.nama_barang','perusahaan.nama_perusahaan')
       ->where('pengujian.status_pengujian','Sedang Proses')
       ->get();
    }

    public static function getDataPengujianAdmin(){
      return $data = Pengujian::select('*')
       ->join('barang', 'pengujian.id_barang','=','barang.id_barang')
       ->join('perusahaan', 'pengujian.id_perusahaan','=','perusahaan.id_perusahaan')
       ->select('pengujian.*','perusahaan.nama_perusahaan', 'barang.nama_barang')
       ->where('pengujian.status_pengujian','Belum Diproses')
       ->get();
    }



    public static function getdatapetugas($data){
      $data=DB::table('pengujian')
      ->join('perusahaan','pengujian.id_perusahaan','=','perusahaan.id_perusahaan')
      ->join('barang','pengujian.id_barang','=','barang.id_barang')
      ->where('pengujian.id_pengujian',$data)
      ->select('pengujian.*','perusahaan.nama_perusahaan','barang.nama_barang')
      ->first();
      return $data;
    }

    public static function getdatapetugas2($data){
      $data=DB::table('pengujian')
      ->join('perusahaan','pengujian.id_perusahaan','=','perusahaan.id_perusahaan')
      ->join('barang','pengujian.id_barang','=','barang.id_barang')
      ->where('pengujian.id_pengujian',$data)
      ->select('pengujian.*','perusahaan.nama_perusahaan','barang.nama_barang')
      ->first();
      return $data;
    }

    public static function getIDAdmin($data){
      $data=DB::table('users')
      ->join('petugas','users.id','=','petugas.user_id')
      ->where('users.id',$data)
      ->select('petugas.id_petugas')
      ->value('petugas.id_petugas');
      return $data;
    }

    public static function getLogUjiLab(){
      return $data = Pengujian::select('*')
      ->join('barang', 'pengujian.id_barang','=','barang.id_barang')
      ->join('perusahaan', 'pengujian.id_perusahaan','=','perusahaan.id_perusahaan')
      ->select('pengujian.*', 'barang.nama_barang','perusahaan.nama_perusahaan')
      ->where('pengujian.status_pengujian','Selesai')
      ->get();
    }

    public static function getLogDetail($data){
      $data=DB::table('pengujian')
      ->join('perusahaan','pengujian.id_perusahaan','=','perusahaan.id_perusahaan')
      ->join('petugas','pengujian.id_petugas_admin','=','petugas.id_petugas')
      ->join('barang','pengujian.id_barang','=','barang.id_barang')
      ->where('pengujian.id_pengujian',$data)
      ->select('pengujian.*','perusahaan.nama_perusahaan','petugas.nama_petugas','barang.nama_barang')
      ->first();
      return $data;
    }
}
