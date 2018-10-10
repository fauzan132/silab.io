<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
     protected $table='barang';
     protected $primaryKey='id_barang';
     public $incrementing =true;
     public $timestamps=true;
     protected $fillable = [
       'id_lab','nama_barang','harga','created_at','updated_at'
     ];
}
