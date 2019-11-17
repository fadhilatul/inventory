@extends('layouts.master')

@section('judul')

<h1>peminjaman</h1>

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
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>inventaris</label>
                  <input type="text" name="nama" value="{{ old('nama') }}" class="form-control" placeholder="nama">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>jumlah</label>
                  <input type="text" name="kondisi" value="{{ old('kondisi') }}" class="form-control" placeholder="kondisi">
                </div>
                <!-- /.form-group -->
              </div>
                <!-- /.form-group -->
              </div>
              <button type="button" class="btn btn-info float-right">tambah</button>
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
