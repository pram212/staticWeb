
@extends('layouts.main')

@section('title', 'Table')

@section('headercontent', 'Table')

@section('cardTitle', 'Table')

@section('content')
<table class="table table-bordered">
  <thead>                  
    <tr>
      <th style="width: 10px">id</th>
      <th>Nama</th>
      <th>Umur</th>
      <th style="width: 40px">Bio</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($cast as $data)
    <tr>
      <td>{{$data->id}}</td>
      <td>{{$data->nama}}</td>
      <td>{{$data->umur}}</td>
      <td>{{$data->bio}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection('content')



