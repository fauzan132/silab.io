@extends('layouts.layout') 
@section('content')
  <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">List Data Lab</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0)">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Data Lab</li>
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
                                <h4 class="card-title">Data Lab</h4>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID Lab</th>
                                                <th>Nama Lab</th>
                                                <th>Tempat Lab</th>
                                                <th>Keterangan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($data as $row => $value)
                                            <tr>
                                                <td>{{ $value->id_lab }}</td>
                                                <td>{{ $value->nama_lab }}</td>
                                                <td>{{ $value->tempat_lab }}</td>
                                                <td>{{ $value->keterangan }}</td>
                                                <td>
                                                <button type="button" class="btn btn-sm waves-effect waves-light btn-info"><i class="ti-eye"></i> Detail</button>
                                                <button type="button" class="btn btn-sm waves-effect waves-light btn-warning"><i class="ti-pencil-alt"></i> Ubah</button>
                                                <button type="button" class="btn btn-sm waves-effect waves-light btn-danger"><i class="ti-trash"></i> Hapus</button>
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
               