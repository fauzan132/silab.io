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
                               <!--  <a href="{{ route('pengujian.create')}}"><button type="button" class="btn btn-sm waves-effect waves-light btn-success"><i class="ti-plus"></i> Tambah Data</button></a> -->
                                    <table id="myTable" class="table table-bordered table-striped nowrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Petugas Lab</th>
                                                <th>Nama Perusahaan</th>
                                                <th>Total Harga</th>
                                                <th>Status Pengujian</th>
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
                                                @if($value->id_petugas_lab==null)
                                                    <td>Pengujian belum diatasi</td>
                                                @elseif($value->id_petugas_lab!=null)
                                                    <td>{{ $value->nama_petugas }}</td>
                                                @endif
                                                @if($value->nama_perusahaan==null)
                                                    <td>Pengujian belum diatasi</td>
                                                @elseif($value->nama_perusahaan!=null)
                                                    <td>{{ $value->nama_perusahaan }}</td>
                                                @endif
                                                @if($value->total_harga==null)
                                                    <td>Pengujian belum diatasi</td>
                                                @elseif($value->total_harga!=null)          
                                                    <td>{{ $value->total_harga }}</td>
                                                @endif
                                                @if($value->status_pengujian==null)
                                                    <td>Pengujian belum diatasi</td>
                                                @elseif($value->status_pengujian!=null)
                                                    <td>{{ $value->status_pengujian }}</td>
                                                @endif 
                                                <td>
                                                <form action="{{ route('pengujian.destroy', $value->id_pengujian) }}" method="post">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    @if($value->tgl_verifikasi==null)
                                                    <a href="{{ route('pengujian.formstatusadmin', $value->id_pengujian) }}" class="btn btn-sm waves-effect waves-light btn-info"><i class="ti-eye"></i> Verifikasi</a>
                                                    @elseif($value->tgl_verifikasi!=null)
                                                    <a href="#" disabled class="btn btn-sm waves-effect waves-light btn-warning"><i class="ti-eye"></i> Pembayaran Terverifikasi</a>
                                                    @endif
                                                </form>
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