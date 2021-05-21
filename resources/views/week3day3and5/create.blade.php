@extends('layouts.main')

@section('title', 'Detail')

@section('headercontent', 'New Cast')

@section('content')
	<form action="/cast" method="POST" >
		@csrf
	  <div class="row">
	    <div class="col-sm-6">
	      <!-- text input -->
	      <div class="form-group">
	        <label>Nama</label>
	        <input type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="Enter ..." name="nama" value="{{ old('nama', '' ) }}">
	        @error('nama')
	        <span id="exampleInputEmail1-error" class="error invalid-feedback">{{$message}}</span>
	        @enderror
	      </div>
	    </div>
	    <div class="col-sm-6">
	      <div class="form-group">
	        <label>Umur</label>
	        <input type="text" class="form-control" placeholder="Enter ..." name="umur">
	      </div>
	    </div>
	  </div>
	  <div class="row">
	    <div class="col-sm-12">
	      <!-- textarea -->
	      <div class="form-group">
	        <label>Bio</label>
	        <textarea class="form-control" rows="3" placeholder="Enter ..." name="bio"></textarea>
	      </div>
	    </div>
	  </div>
	  <button type="submit" class="btn btn-sm btn-primary">Submit</button>
	  <a href="/cast" class="btn btn-sm btn-danger">Back</a>
	</form>

@endsection
