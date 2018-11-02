@extends('layouts.layout') 
@section('content')
  <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">List Data Pengujian</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0)">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Data Pengujian</li>
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
                                <h4 class="card-title">Data Pengujian</h4>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped nowrap">
                                        <thead>
                                            <tr>
                                                <th>Nama Petugas</th>
                                                <th>Nama Petugas Lab</th>
                                                <th>Nama Perusahaan</th>
                                                <th>Total Harga</th>
                                                <th>Bukti Pembayaran</th>
                                                <th>Status Pengujian</th>
                                                <th>Hasil Pengujian</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Iqbal</td>
                                                <td>Cecep</td>
                                                <td>Javan</td>
                                                <td>Rp 90.000</td>
                                                <td>file...</td>
                                                <td>Proses</td>
                                                <td>file....</td>
                                                <td>
                                                <button type="button" class="btn btn-sm waves-effect waves-light btn-info"><i class="ti-eye"></i> Detail</button>
                                                <button type="button" class="btn btn-sm waves-effect waves-light btn-warning"><i class="ti-pencil-alt"></i> Ubah</button>
                                                <button type="button" class="btn btn-sm waves-effect waves-light btn-danger"><i class="ti-trash"></i> Hapus</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Iqbal</td>
                                                <td>Cecep</td>
                                                <td>Javan</td>
                                                <td>Rp 90.000</td>
                                                <td>file...</td>
                                                <td>Proses</td>
                                                <td>file....</td>
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
               