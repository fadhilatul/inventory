@extends('layouts.master')

@section('judul')
    <h1>peminjaman</h1>
@endsection

@section('content')
<div class="card">
            <div class="card-header">
              <h3 class="card-title">Peminjaman</h3>
              <a href="{{url('createpeminjaman')}}"><button type="button" class="btn btn-info float-right">tambah</button></a>
            </div>

     <!-- /.card-header -->

            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                 <th>#</th>
                  <th>tanggal pinjam</th>
                  <th>tanggal kembali</th>
                  <th>user</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>terew</td>
                  <td>fdgfv</td>
                  <td>bgfxcv</td>
                  <td>bgfxcv</td>
                  <td>
                      <button type="button" class="btn btn-info">edit</button>
                      <button type="button" class="btn btn-danger">Delete</button>
                  </td>
                </tr>
              </table>
            </div>
</div>
@endsection
