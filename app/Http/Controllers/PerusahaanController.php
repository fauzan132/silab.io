<?php

namespace App\Http\Controllers;

use App\Perusahaan;
use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    
    public function index()
    {
        $data['data']=Perusahaan::get();
        return view('admin.perusahaan.listperusahaan')
        ->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.perusahaan.formperusahaan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Perusahaan::create([
            'user_id' => $request->user_id,
            'nama_perusahaan' => $request->nama_perusahaan,
            'alamat_perusahaan'=>$request->alamat_perusahaan,
            'notelp_perusahaan' => $request->notelp_perusahaan,
            'nama_penanggungjawab' => $request->nama_penanggungjawab,
            'notelp_penanggungjawab' => $request->notelp_penanggungjawab
                ]);
        return redirect()->route('perusahaan.index')
        ->with('message', 'Data berhasil diinput');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['data']=Perusahaan::find($id);
        return view('admin.perusahaan.detailperusahaan')
        ->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['data']=Perusahaan::find($id);
        return view('admin.perusahaan.formubah_perusahaan')
        ->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Perusahaan::find($id)->update(['nama_perusahaan'=>$request->nama_perusahaan]);
        Perusahaan::find($id)->update(['alamat_perusahaan'=>$request->alamat_perusahaan]);
        Perusahaan::find($id)->update(['notelp_perusahaan'=>$request->notelp_perusahaan]);
        Perusahaan::find($id)->update(['nama_penanggungjawab'=>$request->nama_penanggungjawab]);
        Perusahaan::find($id)->update(['notelp_penanggungjawab'=>$request->notelp_penanggungjawab]);
        return redirect()->route('perusahaan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Perusahaan::find($id)->delete();
        return redirect()->route('perusahaan.index')
        ->with('message', 'Data berhasil dihapus');
    }
}
