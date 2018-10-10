<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengujian extends Model
{
     protected $table='pengujian';
     protected $primaryKey='id_pengujian';
     public $incrementing =true;
     public $timestamps=true;
     protected $fillable = [
       'id_petugas','id_perusahaan','total_harga','status_pembayaran','status_barang',
       'hasil_pengujian','created_at','updated_at',
     ];
}
