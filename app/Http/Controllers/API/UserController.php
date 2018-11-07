<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Perusahaan;
 

class UserController extends Controller
{ 
    public $successStatus = 200;

    public function login(){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            $user = Auth::user();
            $success['token'] =  $user->createToken('nApp')->accessToken;
            return response()->json(['success' => $success], $this->successStatus);
        }
        else{
            return response()->json(['error'=>'Unauthorised'], 401);
        }
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);            
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('nApp')->accessToken;
        $success['name'] =  $user->name;

        return response()->json(['success'=>$success], $this->successStatus);
    }

    // public function details()
    // {
    //     $user = Auth::user();
    //     return response()->json(['success' => $user], $this->successStatus);
    // }

    public function details()
    {
        if(Auth::user()->level==0){
            $user = Auth::user();
            return response()->json(['success' => $user], $this->successStatus);
        }else if(Auth::user()->level==1){
            $user = Auth::user()->id;
            $data = User::getDetailsPetugas($user);
            return response()->json(['success' => $data], $this->successStatus);
        }else if(Auth::user()->level==2){
            $user = Auth::user()->id;
            $data = User::getDetailsPerusahaan($user);
            return response()->json(['success' => $data], $this->successStatus);
        }
       
    }

}
