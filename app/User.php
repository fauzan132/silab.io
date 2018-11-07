<?php

namespace App;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;
 
class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function getDetailsPerusahaan($id){
        return $data = DB::table('perusahaan')
         ->join('users', 'users.id','=','perusahaan.user_id')
         ->select('perusahaan.*','users.*')
         ->where('perusahaan.user_id', $id)
         ->get();
    }

    public static function getDetailsPetugas($id){
        return $data = DB::table('petugas')
         ->join('users', 'users.id','=','petugas.user_id')
         ->select('petugas.*','users.*')
         ->where('petugas.user_id', $id)
         ->get();
    }
}
