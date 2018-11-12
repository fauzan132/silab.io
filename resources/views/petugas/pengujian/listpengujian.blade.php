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
                                                @if($value->nama_perusahaan==null)
                                                    <td>-</td>
                                                @elseif($value->nama_perusahaan!=null)
                                                    <td>{{ $value->nama_perusahaan }}</td>
                                                @endif
                                                @if($value->nama_barang==null)
                                                    <td>-</td>
                                                @elseif($value->nama_barang!=null)
                                                    <td>{{ $value->nama_barang }}</td>
                                                @endif    
                                                @if($value->jumlah_barang==null)
                                                    <td>-</td>
                                                @elseif($value->jumlah_barang!=null)
                                                    <td>{{ $value->jumlah_barang }}</td>   
                                                @endif     
                                                @if($value->tgl_barang_diterima==null)
                                                    <td>-</td>
                                                @elseif($value->tgl_barang_diterima!=null)
                                                <?php $now = new DateTime($value->tgl_barang_diterima);
                                                    $timestring = $now->format('H:i:s d-M-Y');
                                                ?>
                                                    <td>{{ $timestring }}</td>
                                                @endif
                                                @if($value->tgl_barang_selesai==null)
                                                    <td>-</td>
                                                @elseif($value->tgl_barang_selesai!=null)
                                                <?php $now = new DateTime($value->tgl_barang_selesai);
                                                    $timestring = $now->format('H:i:s d-M-Y');
                                                ?>
                                                    <td>{{ $timestring }}</td>
                                                @endif 
                                                @if($value->status_pengujian==null)
                                                    <td>-</td>
                                                @elseif($value->status_pengujian!=null)
                                                    <td>{{ $value->status_pengujian }}</td>
                                                @endif 
                                                @if($value->hasil_pengujian==null)
                                                    <td>-</td>
                                                @elseif($value->hasil_pengujian!=null)
                                                    <td>{{ $value->hasil_pengujian }}</td>
                                                @endif
                                                @if($value->tgl_barang_diterima==null) 
                                                <td>
                                                    <a href="{{ route('pengujian.show', $value->id_pengujian) }}" class="btn btn-sm waves-effect waves-light btn-info"><i class="ti-eye"></i> Verifikasi Penerimaan</a>
                                                </td>
                                                @elseif($value->tgl_barang_diterima!=null)
                                                <td>
                                                    <a href="{{ route('pengujian.show', $value->id_pengujian) }}" class="btn btn-sm waves-effect waves-light btn-danger"><i class="ti-eye"></i> Input Hasil</a>
                                                </td>
                                                @endif
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