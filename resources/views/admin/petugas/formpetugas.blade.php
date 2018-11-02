@extends('layouts.layout') 
@section('content')
  <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Tambah Data Petugas</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0)">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Data Petugas</a></li>
                            <li class="breadcrumb-item active">Tambah Data Petugas</li>
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
                                        <h4 class="card-title">Form Tambah Petugas</h4>
                                    </div> 
                                </div>
                               
                                <form method="POST" action="{{ route('petugas.store') }}" enctype="multipart/form-data" class="form">
                                {{ csrf_field() }}
                                    <div class="form-group m-t-40 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Nama Petugas</label>
                                        <div class="col-10">
                                            <input class="form-control" name="user_id" type="hidden" value="{{ Auth::user()->id }}" id="example-text-input">
                                            <input class="form-control" name="nama_petugas" type="text" value="" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-search-input" class="col-2 col-form-label">Alamat</label>
                                        <div class="col-10">
                                        <textarea class="form-control" rows="3" name="alamat_petugas"></textarea>
                                        </div>
                                    </div>
                                   
                                  
                                    <div class="form-group row">
                                        <label for="example-tel-input" class="col-2 col-form-label">No Telp</label>
                                        <div class="col-10">
                                            <input class="form-control" type="number" name="notelp_petugas" placeholder="contoh:0893728XXXX" id="example-tel-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-month-input" class="col-2 col-form-label">Status Petugas</label>
                                        <div class="col-10">
                                            <select class="custom-select col-12" id="inlineFormCustomSelect" name="status_petugas">
                                                <option selected="">Pilih...</option>
                                                <option value="Petugas Administrasi">Petugas Administrasi</option>
                                                <option value="Petugas Lab">Petugas Lab</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="offset-sm-2 col-sm-10">
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
               