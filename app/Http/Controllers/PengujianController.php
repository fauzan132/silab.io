<?php

namespace App\Http\Controllers;

use App\Pengujian;
use Illuminate\Http\Request;

class PengujianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function index()
    {
        $data['data']=Pengujian::get();
        return view('admin.pengujian.listpengujian')
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
        return view('admin.pengujian.formpengujian');
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
            //'user_id' => $request->user_id,
            'id_petugas_admin' => $request->id_petugas_admin,
            'id_petugas_lab' => $request->id_petugas_lab,
            'total_harga' => $request->total_harga,
            'bukti_pembayaran' => $request->bukti_pembayaran,
            'status_pengujian' => $request->status_pengujian,
            'hasil_pengujian' => $request->hasil_pengujian
                ]);
        return redirect()->route('pengujian.index')
        ->with('message', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['data']=Pengujian::find($id);
        return view('admin.pengujian.detailpengujian')
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
        $data['data']=Pengujian::find($id);
        return view('admin.pengujian.formubah_pengujian')
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
        Pengujian::find($id)->update(['id_petugas_admin'=>$request->id_petugas_admin]);
        Pengujian::find($id)->update(['id_petugas_lab'=>$request->id_petugas_lab]);
        Pengujian::find($id)->update(['total_harga'=>$request->total_harga]);
        Pengujian::find($id)->update(['bukti_pembayaran'=>$request->bukti_pembayaran]);
        Pengujian::find($id)->update(['status_pengujian'=>$request->status_pengujian]);
        Pengujian::find($id)->update(['hasil_pengujian'=>$request->hasil_pengujian]);
        return redirect()->route('pengujian.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pengujian::find($id)->delete();
        return redirect()->route('pengujian.index')
        ->with('message', 'Data berhasil dihapus');
    }

    
}
