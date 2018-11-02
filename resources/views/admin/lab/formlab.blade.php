@extends('layouts.layout') 
@section('content')
  <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Tambah Data Laboratorium</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0)">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Data Laboratorium</a></li>
                            <li class="breadcrumb-item active">Tambah Data Laboratorium</li>
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
                                        <h4 class="card-title">Form Tambah Laboratorium</h4>
                                    </div> 
                                </div>
                               
                                <form method="POST" action="{{ route('lab.store') }}" enctype="multipart/form-data" class="form">
                                {{ csrf_field() }}
                                    <div class="form-group m-t-40 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Nama Laboratorium</label>
                                        <div class="col-10">
                                            <input class="form-control" name="nama_lab" type="text" value="" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group m-t-40 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Tempat Laboratorium</label>
                                        <div class="col-10">
                                            <input class="form-control" name="tempat_lab" type="text" value="" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-search-input" class="col-2 col-form-label">Keterangan</label>
                                        <div class="col-10">
                                        <textarea class="form-control" rows="3" name="keterangan"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="offset-sm-2 col-sm-10">
                                        <button type="submit" class="btn btn-info waves-effect waves-light m-t-10">Simpan</button>
                                        <a href="{{ route('lab.index') }}" type="submit" class="btn btn-default waves-effect waves-light m-t-10">Batal</a>
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
               