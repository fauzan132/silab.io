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


    public static function getDataPengujian(){
      return $data = Pengujian::select('*')
       ->join('petugas', 'pengujian.id_petugas_lab','=','petugas.id_petugas')
       ->join('perusahaan', 'pengujian.id_perusahaan','=','perusahaan.id_perusahaan')
       ->select('pengujian.*', 'petugas.nama_petugas','perusahaan.nama_perusahaan')
       ->get();
    }



    public static function getdatapetugas($data){
      $data=DB::table('pengujian')
      ->join('petugas','pengujian.id_petugas_lab','=','petugas.id_petugas')
      ->join('perusahaan','pengujian.id_perusahaan','=','perusahaan.id_perusahaan')
      ->join('barang','pengujian.id_barang','=','barang.id_barang')
      ->where('pengujian.id_pengujian',$data)
      ->select('pengujian.*','petugas.nama_petugas','perusahaan.nama_perusahaan','barang.nama_barang')
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
}
