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
                            <li class="breadcrumb-item active">Log Data Pengujian</li>
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
                                <h4 class="card-title">Log Data Pengujian</h4>
                                <div class="table-responsive m-t-40">
                               <!--  <a href="{{ route('pengujian.create')}}"><button type="button" class="btn btn-sm waves-effect waves-light btn-success"><i class="ti-plus"></i> Tambah Data</button></a> -->
                                    <table id="myTable" class="table table-bordered table-striped nowrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Perusahaan</th>
                                                <th>Nama Barang</th>
                                                <th>Jumlah Barang</th>
                                                <th>Tanggal Barang Diterima</th>
                                                <th>Tanggal Barang Selesai Diuji</th>
                                                <th>Status Pengujian</th>
                                                <th>Hasil Pengujian</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $i=0;
                                        ?>
                                        @foreach($data as $row => $value)
                                        <?php
                                            $i++;
                                        ?>
                                            <tr>
                                                    <td>{{ $i }}</td>                                               
                                                    <td>{{ $value->nama_perusahaan }}</td>
                                                    <td>{{ $value->nama_barang }}</td>
                                                    <td>{{ $value->jumlah_barang }}</td>           
                                                    <td>{{ $value->tgl_barang_diterima }}</td>
                                                    <td>{{ $value->tgl_barang_selesai }}</td>
                                                    <td>{{ $value->status_pengujian }}</td>
                                                    <td><a href="{{ asset('/hasilpengujian/'.$value->hasil_pengujian) }}" download>Download Hasil Uji</a></td>
                                                <td>
                                                    <a href="{{ route('pengujian.logdetail', $value->id_pengujian) }}" class="btn btn-sm waves-effect waves-light btn-warning"><i class="ti-eye"></i> Lihat Detail Pengujian</a>
                                                </td>
                                            </tr>
                                        @endforeach
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