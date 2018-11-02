<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
     protected $table='petugas';
     protected $primaryKey='id_petugas';
     public $incrementing =false;
     public $timestamps=true;
     protected $fillable = [
       'user_id','nama_petugas','alamat_petugas','notelp_petugas','created_at','updated_at'
     ];
}