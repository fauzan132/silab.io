<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Barang;
use App\Petugas;
use App\Perusahaan;
use App\Lab;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input; 
use Validator;
 

class GetDataController extends Controller
{ 
    public $successStatus = 200;

    public function getBarang()
    {
        $data = Barang::getBarang();
        if(count($data) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json(['success'=>$data], $this->successStatus);
        }
        else{
            return response()->json(['success'=>'Data Kosong'], $this->successStatus);
        }
    }

    public function getPerusahaan()
    {
        $data = Perusahaan::getUsers();
        if(count($data) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json(['success'=>$data], $this->successStatus);
        }
        else{
            return response()->json(['success'=>'Data Kosong'], $this->successStatus);
        }
    }

    public function getPetugas()
    {
        $data = Petugas::getUsers();
        if(count($data) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json(['success'=>$data], $this->successStatus);
        }
        else{
            return response()->json(['success'=>'Data Kosong'], $this->successStatus);
        }
    }

    public function getLab()
    {
        $data = Lab::all();
        if(count($data) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json(['success'=>$data], $this->successStatus);
        }
        else{
            return response()->json(['success'=>'Data Kosong'], $this->successStatus);
        }
    }

    public function getUser()
    {
        $data = User::all();
        if(count($data) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json(['success'=>$data], $this->successStatus);
        }
        else{
            return response()->json(['success'=>'Data Kosong'], $this->successStatus);
        }
    }
}

