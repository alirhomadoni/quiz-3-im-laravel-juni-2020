@extends('layouts.master')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th colspan="1">No.</th>
            <th colspan="1" >Judul</th>
            <th colspan="4" >Isi Artikel</th>
            <th colspan="1">Slug</th>
            <th colspan="1">tag</th>
            <th colspan="4">Actions</th>
          </tr>
        </thead>
        <tbody>
        @foreach($artikel as $key => $item)
        <tr>
            <th colspan="1">{{$item->id}}</th>
            <th colspan="1" >{{$item->judul}}</th>
            <th colspan="4" >{{$item->isi}}</th>
            <th colspan="1">{{$item->slug}}</th>
            <th colspan="1">{{$item->tag}}</th>
            <th colspan="4">
                <a class="btn btn-primary" href="/artikel/{{$item->id}}" role="button" method="GET">lihat artikel</a>
                <a class="btn btn-primary" href="/artikel/{{$item->id}}/edit" role="button" method="GET">edit</a>
                    <form action="artikel/{{$item->id}}" method="POST" style="display : inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">delete</button>

                    </form>
            
            </th>
          </tr>
        @endforeach
        
        </tbody>
      </table>
    </div>
  </div>
  <a class="btn btn-primary" href="/artikel/create" role="button">Buat Artikel Baru</a>
</div>
@endsection
@push('script')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush