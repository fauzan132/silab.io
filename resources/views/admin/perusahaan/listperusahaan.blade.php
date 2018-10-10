@extends('layouts.layout') 
@section('content')
  <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">List Data Perusahaan</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0)">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Data Perusahaan</li>
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
                                <h4 class="card-title">Data Perusahaan</h4>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped nowrap">
                                        <thead>
                                            <tr>
                                                <th>ID Perusahaan</th>
                                                <th>Nama Perusahaan</th>
                                                <th>Alamat Perusahaan</th>
                                                <th>No Telp Perusahaan</th>
                                                <th>Nama Penanggung Jawab</th>
                                                <th>No Telp Penanggung Jawab</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>
                                                <button type="button" class="btn btn-sm waves-effect waves-light btn-info"><i class="ti-eye"></i> Detail</button>
                                                <button type="button" class="btn btn-sm waves-effect waves-light btn-warning"><i class="ti-pencil-alt"></i> Ubah</button>
                                                <button type="button" class="btn btn-sm waves-effect waves-light btn-danger"><i class="ti-trash"></i> Hapus</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>
                                                <button type="button" class="btn btn-sm waves-effect waves-light btn-info"><i class="ti-eye"></i> Detail</button>
                                                <button type="button" class="btn btn-sm waves-effect waves-light btn-warning"><i class="ti-pencil-alt"></i> Ubah</button>
                                                <button type="button" class="btn btn-sm waves-effect waves-light btn-danger"><i class="ti-trash"></i> Hapus</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
@endsection
               