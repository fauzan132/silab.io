<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
     protected $table='laboratorium';
     protected $primaryKey='id_lab';
     public $incrementing =false;
     public $timestamps=true;
     protected $fillable = [
       'nama_lab','tempat_lab','keterangan','created_at','updated_at' 
     ];
}