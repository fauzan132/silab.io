<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
     protected $table='barang';
     protected $primaryKey='id_barang';
     public $incrementing =false;
     public $timestamps=true; 
     protected $fillable = [
       'id_lab','nama_barang','harga','created_at','updated_at'
     ];


     public static function getBarang(){
      return $data = Barang::select('*')
       ->join('laboratorium', 'barang.id_lab','=','laboratorium.id_lab')
       ->select('barang.*','laboratorium.nama_lab')
       ->get();
    }
}
