<?php

namespace App\Http\Controllers;

use App\Lab;
use Illuminate\Http\Request;

class LabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    
    public function index()
    {
        $data['data']=Lab::get();
        return view('admin.lab.listlab')
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
        return view('admin.lab.formlab');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Lab::create([
            'nama_lab' => $request->nama_lab,
            'tempat_lab' => $request->tempat_lab,
            'keterangan' => $request->keterangan
                ]);
        return redirect()->route('lab.index')->with('message', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['data']=Lab::find($id);
        return view('admin.lab.listlab')
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
        $data['data']=Lab::get(); 
        return view('admin.lab.formubah_lab')
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
        Lab::find($id)->update(['nama_lab'=>$request->nama_lab]);
        Lab::find($id)->update(['tempat_lab'=>$request->tempat_lab]);
        Lab::find($id)->update(['keterangan'=>$request->keterangan]);
        return redirect()->route('lab.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Lab::find($id)->delete();
        return redirect()->route('lab.index')
        ->with('message', 'Data berhasil dihapus');
    }
}
