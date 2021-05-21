@extends('layouts.main')

@section('title', 'Detail')

@section('headercontent', 'Detail Cast')

@section('content')
<div class="card bg-light d-flex flex-fill">
	<div class="card-header text-muted border-bottom-0">
	  Caster 
	</div>
	@foreach( $cast as $data )
	<div class="card-body pt-0">
	  <div class="row">
	    <div class="col-sm">
	      <h2 class="lead"><b>{{$data->nama}}</b></h2>
	      <ul class="ml-4 mb-0 fa-ul text-muted">
	        <li class="small mb-3"><span class="fa-li"><i class="fas fa-lg fa-user"></i></span> Umur : {{ $data->umur }}</li>
	        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Bio : {{ $data->bio }}</li>
	      </ul>
	    </div>
	    <div class="col-5 text-center">
	      <img src="{{asset('dist/img/user1-128x128.jpg')}}" alt="user-avatar" class="img-circle img-fluid">
	    </div>
	  </div>
	</div>
	@endforeach
	<div class="card-footer">
	  <div class="text-right">
	    <a href="#" class="btn btn-sm bg-teal">
	      <i class="fas fa-comments"></i>
	    </a>
	    <a href="/cast/{{ $data->id}}/edit" class="btn btn-sm btn-primary">
	      <i class="fas fa-user"></i> Edit
	    </a>
	  </div>
	</div>
</div>

@endsection