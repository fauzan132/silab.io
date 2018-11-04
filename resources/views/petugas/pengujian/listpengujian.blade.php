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
                                                <th>Bukti Pembayaran</th>
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
                                                @if($value->id_petugas_lab==null)
                                                    <td>Pengujian belum diatasi</td>
                                                @elseif($value->id_petugas_lab!=null)
                                                    <td>{{ $value->id_petugas_lab }}</td>
                                                @endif
                                                @if($value->id_nama_perusahaan==null)
                                                    <td>Pengujian belum diatasi</td>
                                                @elseif($value->id_nama_perusahaan!=null)
                                                    <td>{{ $value->nama_perusahaan }}</td>
                                                @endif
                                                @if($value->total_harga==null)
                                                    <td>Pengujian belum diatasi</td>
                                                @elseif($value->total_harga!=null)          
                                                    <td>{{ $value->total_harga }}</td>
                                                @endif
                                                @if($value->bukti_pembayaran==null)
                                                    <td>Pengujian belum diatasi</td>
                                                @elseif($value->bukti_pembayaran!=null)
                                                    <td>{{ $value->bukti_pembayaran }}</td>
                                                @endif 
                                                @if($value->status_pengujian==null)
                                                    <td>Pengujian belum diatasi</td>
                                                @elseif($value->status_pengujian!=null)
                                                    <td>{{ $value->status_pengujian }}</td>
                                                @endif 
                                                @if($value->hasil_pengujian==null)
                                                    <td>Pengujian belum diatasi</td>
                                                @elseif($value->hasil_pengujian!=null)
                                                    <td>{{ $value->hasil_pengujian }}</td>
                                                @endif 
                                                <td>
                                                <form action="{{ route('pengujian.destroy', $value->id_pengujian) }}" method="post">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <a href="{{ route('pengujian.show', $value->id_pengujian) }}" type="button" class="btn btn-sm waves-effect waves-light btn-info"><i class="ti-eye"></i> Ubah Status</a>
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