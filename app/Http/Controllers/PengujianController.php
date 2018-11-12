<?php

namespace App\Http\Controllers;

use App\Pengujian;
use DateTime;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input; 
use Illuminate\Support\Facades\Storage;

class PengujianController extends Controller
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
        $data['data']=Pengujian::getDataPengujianLab();
        return view('petugas.pengujian.listpengujian')
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
        $data['data']=Pengujian::getdatapetugas($id);
        return view('petugas.pengujian.formpengujian')
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
    public function panggilujipetugas($id)
    {
        Pengujian::find($id);
        return view('petugas.pengujian.formpengujian');
    }

    public function listpengujianadmin()
    {
        $data['data']=Pengujian::getDataPengujianAdmin();
        return view('admin.pengujian.listpengujian')
        ->with($data);
    }

    public function pengujianadmin($id)
    {
        $data['data']=Pengujian::getdatapetugas2($id);
        return view('admin.pengujian.formpengujian')
        ->with($data);
        //print_r($data);
    }

    public function verifikasibayar(Request $request)
    {
        $id = $request->id_pengujian;
        $id_petugas_admin = Pengujian::getIDAdmin(Auth::user()->id);
        $tgl_verifikasi = new DateTime('Asia/Jakarta');
        $data = Pengujian::where('id_pengujian',$id)->first();
        $data->id_petugas_admin = $id_petugas_admin;
        $data->tgl_verifikasi = $tgl_verifikasi;
        $data->status_pengujian = "Sedang Proses";
        $data->save();
        return redirect()->route('pengujian.liststatusadmin');
    }

    public function verifikasibarangdatang(Request $request)
    {
        if($file=$request->file('hasil_pengujian')){
            if($file->getClientOriginalExtension()=="doc" or $file->getClientOriginalExtension()=="docx" or $file->getClientOriginalExtension()=="pdf"){
                $name=("HasilUji".time()).".".$file->getClientOriginalExtension();
                $file->move('hasilpengujian',$name);
                $berkas=$name;
            }else{
                return "Format tidak didukung";
            }
        }
        if($request->input('tgl_barang_diterima')==null){
            $id = $request->id_pengujian;
            $id_petugas_lab = Pengujian::getIDAdmin(Auth::user()->id);
            $tgl_barang_diterima = new DateTime('Asia/Jakarta');
            $data = Pengujian::where('id_pengujian',$id)->first();
            $data->id_petugas_lab = $id_petugas_lab;
            $data->tgl_barang_diterima = $tgl_barang_diterima;
            $data->save();
            return redirect()->route('pengujian.index');
        }elseif($request->input('tgl_barang_diterima')!=null){
            $id = $request->id_pengujian;
            $tgl_barang_selesai = new DateTime('Asia/Jakarta');
            $hasil_pengujian = $berkas;
            $data = Pengujian::where('id_pengujian',$id)->first();
            $data->tgl_barang_selesai = $tgl_barang_selesai;
            $data->hasil_pengujian = $hasil_pengujian;
            $data->status_pengujian = "Selesai";
            $data->save();
            return redirect()->route('pengujian.index');
            //print_r($id);
        }
        
    }

    public function logpengujian(){
        $data['data']=Pengujian::getLogUjiLab();
        return view('petugas.pengujian.logpengujian')
        ->with($data);
    }

    public function logdetailpengujian($id){
        $data['data']=Pengujian::getLogDetail($id);
        return view('admin.pengujian.logdetailpengujian')
        ->with($data);
    }

    public function hasiluji($id){
        $data=Pengujian::find($id);
        $pathToFile='/hasilpengujian'.'/'.$data->hasil_pengujian;
        return response()->download(public_path($pathToFile));
    }
    
}
