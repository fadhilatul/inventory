@extends('layouts.master')

@section('judul')
    <h1>inventaris</h1>
@endsection

@section('content')
<div class="card">
            <div class="card-header">
              <h3 class="card-title">inventaris</h3>
              <a href="{{url('createinventaris')}}"><button type="button" class="btn btn-info float-right">tambah</button></a>
            </div>
     <!-- /.card-header -->

            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>kondisi</th>
                  <th>keterangan</th>
                  <th>jenis</th>
                  <th>tanggal Registrasi</th>
                  <th>Ruangan</th>
                  <th>Kode inventaris</th>
                  <th>jumlah</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($data as $datas)
                <tr>
                  <td>{{$datas->name }}</td>
                  <td>{{$datas->kondisi }}</td>
                  <td>{{$datas->keterangan }}</td>
                  <td>{{$datas->jumlah }}</td>
                  <td>{{$datas->id_jenis }}</td>
                  <td>{{$datas->tanggal_register}}</td>
                  <td>{{$datas->id_ruang }}</td>
                  <td>{{$datas->kode_inventaris }}</td>
                  <td>
                      <button type="button" class="btn btn-info">edit</button>
                      <button type="button" class="btn btn-danger">Delete</button>
                  </td>
                </tr>
                @endforeach
              </table>
            </div>
</div>
            <!-- /.card-body -->
@endsection

