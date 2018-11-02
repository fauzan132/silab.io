<?php

namespace App\Http\Controllers;

use App\Petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function index()
    {
        $data['data']=Petugas::get();
        return view('admin.petugas.listpetugas', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.petugas.formpetugas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Petugas::create([
            'user_id' => $request->user_id,
            'nama_petugas' => $request->nama_petugas,
            'alamat_petugas'=>$request->alamat_petugas,
            'notelp_petugas' => $request->notelp_petugas,
            'status_petugas' => $request->status_petugas
                ]);
        return redirect()->route('petugas.index')->with('message', 'Data berhasil diinput');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['data']=Petugas::find($id);
        return view('admin.petugas.detailpetugas', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['data']=Petugas::find($id);
        return view('admin.petugas.formubahpetugas', $data);
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
        Petugas::find($id)->update(['nama_petugas'=>$request->nama_petugas]);
        Petugas::find($id)->update(['alamat_petugas'=>$request->alamat_petugas]);
        Petugas::find($id)->update(['notelp_petugas'=>$request->notelp_petugas]);
        Petugas::find($id)->update(['status_petugas'=>$request->status_petugas]);
        return redirect()->route('petugas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Petugas::find($id)->delete();
        return redirect()->route('petugas.index')->with('message', 'Data berhasil di hapus');
    }
}
