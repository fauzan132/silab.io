<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPengujian extends Model
{
     protected $table='detail_pengujian';
     protected $primaryKey='id_detail';
     public $incrementing =true;
     public $timestamps=true;
     protected $fillable = [
       'id_pengujian','id_barang','jumlah_barang','harga_per_barang',
     ];
}
