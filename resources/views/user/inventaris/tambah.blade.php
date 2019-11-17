@extends('layouts.master')

@section('judul')

<h1>inventaris</h1>

@endsection

@section('content')
<div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Tambah</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
          </div>
          <form action="{{url('createinventaris')}}" method="post">
              {{csrf_field()}}
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" value="{{ old('nama') }}" class="form-control" placeholder="nama">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Kondisi</label>
                  <input type="text" name="kondisi" value="{{ old('kondisi') }}" class="form-control" placeholder="kondisi">
                </div>
                <!-- /.form-group -->
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>keterangan</label>
                  <input type="text" name="keterangan" value="{{ old('keterangan') }}" class="form-control" placeholder="keterangan">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>jenis</label>
                  <select class="form-control select2bs4" name="jenis" style="width: 100%;">
                    @foreach($jenis as $jenisis)
                  <option value="{{$jenisis->id}}">{{$jenisis->nama_jenis}}</option>
                  @endforeach
                  </select>
                  <!-- <input type="text" name="jenis" value="{{ old('jenis') }}" class="form-control" placeholder="jenis"> -->
                </div>
                <!-- /.form-group -->
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>tanggal registrasi</label>
                  <input type="date" name="tanggal registrasi" value="{{ old('tanggal registrasi') }}" class="form-control" placeholder="tanggal registrasi">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>ruangan</label>
                  <select class="form-control select2bs4" name="ruangan" style="width: 100%;">
                  @foreach($ruangan as $ruangans)
                  <option value="{{$ruangans->id}}">{{$ruangans->nama_ruangan}}</option>
                  @endforeach
                  </select>
                  <!-- <input type="text" name="ruangan" value="{{ old('ruangan') }}" class="form-control" placeholder="ruangan"> -->
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>kode inventaris</label>
                  <input type="text" name="kode inventaris" value="{{ old('kode inventaris') }}" class="form-control" placeholder="kode inventaris">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>jumlah</label>
                  <input type="text" name="jumlah" value="{{ old('jumlah') }}" class="form-control" placeholder="jumlah">
                </div>
                <button type="submit" class="btn btn-info float-right">tambah</button>
                <!-- /.form-group -->
              </div>
</from>
              <!-- /.col -->
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>

            <!-- /.row -->
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
        </div>

@endsection
