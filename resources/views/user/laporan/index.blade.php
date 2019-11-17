@extends('layouts.master')

@section('judul')
    <h1>laporan</h1>
@endsection

@section('content')
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Laporan</h3>
            </div>
<div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>inventaris</th>
                  <th>Peminjaman</th>
                  <th>Tanggal pinjam</th>
                  <th>Tangal kembali</th>
                  <th>status</th>
                  <th>jumlah</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                  <td>X</td>
                </tr>
              </table>
            </div>
</div>
@endsection
