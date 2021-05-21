@extends('layouts.main')


@section('title', 'Casts Data')

@section('headercontent', 'Casts Data')

@section('content')
<div class="text-right">
  <a href="/cast/create" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i></a>
</div>
<table id="example1" class="table table-bordered">
  <thead>                  
    <tr class="text-center">
      <th width="20">Nomor</th>
      <th>Nama</th>
      <th>Umur</th>
      <th>Tanggal Registrasi</th>
      <th width="100">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($cast as $data)
    <tr class="text-center">
      <td>{{ $loop->iteration }}</td>
      <td>{{ $data->nama }}</td>
      <td>{{ $data->umur }}</td>
      <td>{{ $data->bio }}</td>
      <td width="150">
        <div class="d-flex">
          <a href="/cast/{{ $data->id}}" class="btn btn-sm btn-success ms-1">Detail</a>
          <a href="/cast/{{ $data->id}}/edit" class="btn btn-sm btn-primary ms-1">Edit</a>
          <form action="/cast/{{ $data->id }} " method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger ms-1" onclick="confirm('apakah kamu yakin mau hapus {{ $data->nama }} ?')">Delete</button>
          </form>
        </div>
      </td>
      @empty
      <td class="text-center" colspan="5"><p class="text-bold">Belum ada data.</p></td>
    </tr>
    @endforelse
  </tbody>
</table>

@endsection

@push('script')
<script src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="{{asset('plugins/toastr/toastr.min.js')}}"></script>

<script>
  $(function () {
    $("#example1").DataTable();
  });

  $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: true,
      timer: 3000
    });
  });

  $

</script>

  @if(session('success'))
    <div id="toastsContainerTopRight" class="toasts-top-right fixed">
      <div class="toast bg-success fade show" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
          <strong class="mr-auto">Toast Title</strong>
          <small>Subtitle</small>
          <button data-dismiss="toast" type="button" class="ml-2 mb-1 close" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="toast-body">{{ session('success') }}! .</div>
      </div>
    </div>
  @endif
@endpush