<form method="POST" action="{{ route('pengujian.buktibayar', $data[0]['id_pengujian']) }}" enctype="multipart/form-data">
      {{ csrf_field() }}
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="exampleInputName">ID Petugas Admin</label>
                <input class="form-control" id="exampleInputName" type="text" name="id" value="{{ $data[0]['id_pengujian'] }}" aria-describedby="nameHelp" placeholder="1" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Bukti</label>
            <input class="form-control" id="exampleInputName" type="text" name="bukti_pembayaran" aria-describedby="nameHelp" placeholder="Nama Matakuliah" required>
          </div>
         
          <div class="row">
            <div class="col-md-1 offset-md-9">
              <a href="#" class="btn btn-danger btn-md">Batal</a>
            </div>
            <div class="col-md-1 offset-md-0">
              <input type="submit" class="btn btn-primary btn-md" value="Simpan">
            </div>
          </div>
        </form> 