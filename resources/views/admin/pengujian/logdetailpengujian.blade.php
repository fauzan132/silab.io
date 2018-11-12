@extends('layouts.layout') 
@section('content')
  <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Log Detail Pengujian</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0)">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('pengujian.index')}}">Data Pengujian</a></li>
                            <li class="breadcrumb-item active">Log Detail Pengujian</li>
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
                                        <h4 class="card-title">Log Detail Pengujian</h4>
                                    </div> 
                                </div>
                               
                                <form action="#" enctype="multipart/form-data" class="form">
                                <input class="form-control" name="id_pengujian" type="hidden" value="{{$data->id_pengujian}}" id="example-text-input" readonly>
                                    <div class="form-group m-t-40 row">
                                        <label for="example-text-input" class="col-3 col-form-label">ID Pengujian</label>
                                        <div class="col-9">
                                            <input class="form-control" name="id_perusahaan" type="text" value="{{$data->id_pengujian }}" id="example-text-input" disabled>
                                        </div>
                                    </div>      
                                    <div class="form-group m-t-40 row">
                                        <label for="example-text-input" class="col-3 col-form-label">Nama Perusahaan</label>
                                        <div class="col-9">
                                            <input class="form-control" name="id_perusahaan" type="text" value="{{$data->nama_perusahaan }}" id="example-text-input" disabled>
                                        </div>
                                    </div>                                  
                                    <div class="form-group row">
                                        <label for="example-tel-input" class="col-3 col-form-label">Nama Barang</label>
                                        <div class="col-9">
                                            <input class="form-control" type="text" name="id_barang" id="example-tel-input" value="{{$data->nama_barang }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-tel-input" class="col-3 col-form-label">Jumlah Barang</label>
                                        <div class="col-9">
                                            <input class="form-control" type="text" name="jumlah_barang" id="example-tel-input" value="{{$data->jumlah_barang }}" disabled>
                                        </div>
                                    </div>
                                    @if(Auth::user()->level==0)
                                    <div class="form-group row">
                                        <label for="example-tel-input" class="col-3 col-form-label">Total Harga</label>
                                        <div class="col-9">
                                            <input class="form-control" type="text" name="jumlah_barang" id="example-tel-input" value="{{$data->total_harga }}" disabled>
                                        </div>
                                    </div>
                                    @endif
                                    @if(Auth::user()->level==0)
                                    <div class="form-group row">
                                        <label for="example-tel-input" class="col-3 col-form-label">Bukti Pembayaran</label>
                                        <div class="col-9">
                                           <img class="img-responsive buktibayar" disable width="400px" height="200px" src="{{ asset('buktibayar/'.$data->bukti_pembayaran ) }}" />
                                        </div>
                                    </div>
                                    @endif
                                    @if(Auth::user()->level==0)
                                    <div class="form-group row">
                                        <label for="example-tel-input" class="col-3 col-form-label">Tgl. Bayar</label>
                                        <div class="col-9">
                                            <?php $now = new DateTime($data->tgl_bayar);
                                                    $timestring = $now->format('H:i:s d-M-Y');
                                                ?>
                                            <input class="form-control" type="text" name="jumlah_barang" id="example-tel-input" value="{{$timestring }}" disabled>
                                        </div>
                                    </div>
                                    @endif
                                    <div class="form-group row">
                                        <label for="example-tel-input" class="col-3 col-form-label">Tgl. Verifikasi</label>
                                        <div class="col-9">
                                            <?php $now = new DateTime($data->tgl_verifikasi);
                                                    $timestring = $now->format('H:i:s d-M-Y');
                                                ?>
                                            <input class="form-control" type="text" name="jumlah_barang" id="example-tel-input" value="{{$timestring }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-tel-input" class="col-3 col-form-label">Tgl. Barang Diterima</label>
                                        <div class="col-9">
                                            <?php $now = new DateTime($data->tgl_barang_diterima);
                                                    $timestring = $now->format('H:i:s d-M-Y');
                                                ?>
                                            <input class="form-control" type="text" name="jumlah_barang" id="example-tel-input" value="{{$timestring }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-tel-input" class="col-3 col-form-label">Tgl. Barang Selesai</label>
                                        <div class="col-9">
                                            <?php $now = new DateTime($data->tgl_barang_selesai);
                                                    $timestring = $now->format('H:i:s d-M-Y');
                                                ?>
                                            <input class="form-control" type="text" name="jumlah_barang" id="example-tel-input" value="{{$timestring }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-tel-input" class="col-3 col-form-label">Status Pengujian</label>
                                        <div class="col-9">
                                            <label for="example-tel-input" class="col-3 col-form-label btn btn-warning waves-effect waves-light m-t-10">{{$data->status_pengujian }}</label>
                                            <!-- <input class="form-control" type="text" name="jumlah_barang" id="example-tel-input" value="{{$data->status_pengujian }}" disabled> -->
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-tel-input" class="col-3 col-form-label">Hasil Pengujian</label>
                                        <div class="col-9">
                                            <label for="example-tel-input" class="col-3 col-form-label"><a href="{{ route('pengujian.hasil', $data->id_pengujian) }}" >Download Hasil Uji</a></label>
                                            <!-- <input class="form-control" type="text" name="jumlah_barang" id="example-tel-input" value="{{$data->hasil_pengujian }}" disabled> -->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="offset-sm-3 col-sm-9">
                                        <a href="{{ route('pengujian.berhasil') }}" class="btn btn-default waves-effect waves-light m-t-10">Kembali</a>
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