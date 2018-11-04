<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
