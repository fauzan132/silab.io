@extends('layouts.layout') 
@section('content')
  <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Tambah Data Perusahaan</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0)">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Data Perusahaan</a></li>
                            <li class="breadcrumb-item active">Tambah Data Perusahaan</li>
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
                                        <h4 class="card-title">Form Tambah Perusahaan</h4>
                                    </div> 
                                </div>
                               
                                <form class="form">
                                    <div class="form-group m-t-40 row">
                                        <label for="example-text-input" class="col-3 col-form-label">Nama Perusahaan</label>
                                        <div class="col-9">
                                            <input class="form-control" name="nama_perusahaan" type="text" value="Nama Perusahaan" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-search-input" class="col-3 col-form-label">Alamat</label>
                                        <div class="col-9">
                                        <textarea class="form-control" rows="3" name="alamat_perusahaan"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-email-input" class="col-3 col-form-label">Email</label>
                                        <div class="col-9">
                                            <input class="form-control" type="email" name="email" placeholder="admin@example.com" id="example-email-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-password-input" class="col-3 col-form-label">Password</label>
                                        <div class="col-9">
                                            <input class="form-control" type="password" name="password" placeholder="***" id="example-password-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-tel-input" class="col-3 col-form-label">No Telp</label>
                                        <div class="col-9">
                                            <input class="form-control" type="number" name="notelp_perusahaan" placeholder="contoh:0893728XXXX" id="example-tel-input">
                                        </div>
                                    </div>
                                    <div class="form-group m-t-40 row">
                                        <label for="example-text-input" class="col-3 col-form-label">Nama Penanggung jawab</label>
                                        <div class="col-9">
                                            <input class="form-control" name="nama_penanggungjawab" type="text" value="Nama Penanggung Jawab" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-tel-input" class="col-3 col-form-label">No Telp Penangung Jawab</label>
                                        <div class="col-9">
                                            <input class="form-control" type="tel" name="notelp_penanggungjawab" placeholder="contoh:0893728XXXX" id="example-tel-input">
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
               