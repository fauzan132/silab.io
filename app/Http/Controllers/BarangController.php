<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Lab;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['data']=Barang::get(); 
        return view('admin.barang.listbarang')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //
       $lab['lab']=Lab::get(); 
       return view('admin.barang.formbarang')
       ->with($lab);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Barang::create([
            'id_lab' => $request->id_lab,
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga
                ]);
        return redirect()->route('barang.index')->with('message', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['data']=Barang::find($id);
        return view('admin.barang.listbarang')
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
        $data['data']=Barang::find($id);
        $lab['lab']=Lab::get(); 
        return view('admin.barang.formbarang')
        ->with($data)
        ->with($lab);
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
        Barang::find($id)->update(['id_lab'=>$request->id_lab]);
        Barang::find($id)->update(['nama_barang'=>$request->nama_barang]);
        Barang::find($id)->update(['harga'=>$request->harga]);
        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Barang::find($id)->delete();
        return redirect()->route('barang.index')->with('message', 'Data berhasil dihapus');
    }
}
