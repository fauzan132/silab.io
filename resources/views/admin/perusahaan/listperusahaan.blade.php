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
                                <a href="{{ route('perusahaan.create')}}"><button type="button" class="btn btn-sm waves-effect waves-light btn-success"><i class="ti-plus"></i> Tambah Data</button></a>
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
                                        @foreach($data as $row => $value)
                                            <tr>
                                                <td>{{ $value->id_perusahaan }}</td>
                                                <td>{{ $value->nama_perusahaan }}</td>
                                                <td>{{ $value->alamat_perusahaan }}</td>
                                                <td>{{ $value->notelp_perusahaan }}</td>
                                                <td>{{ $value->nama_penanggungjawab }}</td>
                                                <td>{{ $value->notelp_penanggungjawab }}</td>
                                                <td>
                                                <form action="{{ route('perusahaan.destroy', $value->id_perusahaan) }}" method="post">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <!-- <a href="{{ route('perusahaan.show', $value->id_perusahaan) }}" class="btn btn-sm waves-effect waves-light btn-info"><i class="ti-eye"></i> Detail</a> -->
                                                    <!--<a href="{{ route('perusahaan.edit', $value->id_perusahaan) }}" class="btn btn-sm waves-effect waves-light btn-warning"><i class="ti-pencil-alt"></i> Ubah</a>-->
                                                    <button type="submit" class="btn btn-sm waves-effect waves-light btn-danger"><i class="ti-trash"></i> Hapus</button>
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
               