<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
     protected $table='perusahaan';
     protected $primaryKey='id_perusahaan';
     public $incrementing =false;
     public $timestamps=true;
     protected $fillable = [
       'user_id','nama_perusahaan','alamat_perusahaan','notelp_perusahaan','nama_penanggungjawab','notelp_penanggungjawab',
       'created_at','updated_at'
     ];

     public static function getUsers(){
      return $data = User::select('*')
       ->join('perusahaan', 'users.id','=','perusahaan.user_id')
       ->get();
    }
}
