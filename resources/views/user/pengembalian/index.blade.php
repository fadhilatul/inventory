@extends('layouts.master')

@section('judul')
    <h1>pengembalian</h1>
@endsection

@section('content')
<div class="card">
            <div class="card-header">
              <h3 class="card-title">pengembalian</h3>
            </div>
<div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Inventaris</th>
                  <th>Peminjaman</th>
                  <th>Jumlah</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>
                      <button type="button" class="btn btn-info">edit</button>
                      <button type="button" class="btn btn-danger">Delete</button>
                  </td>
                </tr>
              </table>
            </div>
</div>
@endsection
