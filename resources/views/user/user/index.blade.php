@extends('layouts.master')

@section('judul')
    <h1>User</h1>
@endsection

@section('content')
<div class="card">
            <div class="card-header">
              <h3 class="card-title">User</h3>
            </div>
<div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>name</th>
                  <th>username</th>
                  <th>email</th>
                  <th>action</th>

                </tr>
                </thead>
                <tbody>
                    @foreach($data as $datas)
                <tr>
                  <td>{{$datas->name }}</td>
                  <td>{{$datas->username }}</td>
                  <td>{{$datas->email }}</td>

                  <td>
                      <button type="button" class="btn btn-info">edit</button>
                      <button type="button" class="btn btn-danger">Delete</button>
                  </td>
                </tr>
                @endforeach

              </table>
            </div>
</div>
@endsection
