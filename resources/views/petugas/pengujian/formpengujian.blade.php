@extends('layouts.layout') 
@section('content')
  <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Tambah Data Pengujian</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0)">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('pengujian.index')}}">Data Pengujian</a></li>
                            <li class="breadcrumb-item active">Tambah Data Pengujian</li>
                        </ol>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                        <div class="card-body">
                                <div class="d-flex no-block align-self-center">
                                    <div>
                                        <h4 class="card-title">Form Tambah Pengujian</h4>
                                    </div> 
                                </div>
                               
                                <form class="form">
                                    <div class="form-group m-t-40 row">
                                        <label for="example-text-input" class="col-3 col-form-label">Nama Petugas Lab</label>
                                        <div class="col-9">
                                            <input class="form-control" name="id_petugas_lab" type="text" value="{{$data->nama_petugas}}" id="example-text-input" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group m-t-40 row">
                                        <label for="example-text-input" class="col-3 col-form-label">Nama Perusahaan</label>
                                        <div class="col-9">
                                            <input class="form-control" name="id_perusahaan" type="text" value="{{$data->nama_perusahaan}}" id="example-text-input" disabled>
                                        </div>
                                    </div>                                  
                                    <div class="form-group row">
                                        <label for="example-tel-input" class="col-3 col-form-label">Nama Barang</label>
                                        <div class="col-9">
                                            <input class="form-control" type="text" name="id_barang" id="example-tel-input" value="{{$data->nama_barang}}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-tel-input" class="col-3 col-form-label">Jumlah Barang</label>
                                        <div class="col-9">
                                            <input class="form-control" type="text" name="jumlah_barang" id="example-tel-input" value="{{$data->jumlah_barang}}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-tel-input" class="col-3 col-form-label">Tanggal Barang Diterima</label>
                                        <div class="col-9">
                                            <input class="form-control" type="date" name="tgl_barang_diterima" id="example-tel-input" value="{{$data->tgl_barang_diterima}}">
                                        </div>
                                    </div>
                                                                       
                                    @if($data->tgl_barang_diterima!=null)
                                     <div class="form-group row">
                                        <label for="example-tel-input" class="col-3 col-form-label">Tanggal Barang Selesai Diuji</label>
                                        <div class="col-9">
                                            <input class="form-control" type="date" name="tgl_barang_selesai" id="example-tel-input">
                                        </div>
                                    </div>
                                    @endif
                                    <div class="form-group row">
                                        <label for="example-tel-input" class="col-3 col-form-label">Hasil Pengujian</label>
                                        <div class="col-9">
                                            <input class="form-control" type="file" name="hasil_pengujian" id="example-tel-input">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="offset-sm-3 col-sm-9">
                                        <button type="submit" class="btn btn-info waves-effect waves-light m-t-10">Simpan</button>
                                        <button type="submit" class="btn btn-default waves-effect waves-light m-t-10">Batal</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
@endsection