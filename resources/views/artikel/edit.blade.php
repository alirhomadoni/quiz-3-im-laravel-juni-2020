@extends('layouts.master')
@section('content')
<form action="/artikel/{{$artikel->id}}" method="POST">
@csrf
@method('PUT')

  <div class="form-group">
  <label for="judul">judul:</label>
    <input type="textarea" class="form-control" name="judul" value="{{$artikel->judul}}" placeholder="Enter your judul" id="judul" rows='1'>
    <label for="user_id">user_id:</label>
    <input type="textarea" class="form-control" name="user_id" value="{{$artikel->user_id}}" placeholder="Enter your user_id" id="user_id" rows='1'>
    <label for="pertanyaan">isi:</label>
    <input type="textarea" class="form-control" name="isi" value="{{$artikel->isi}}"placeholder="Enter your artikel content" id="is" rows='3'>
    <label for="judul">tag:</label>
    <input type="textarea" class="form-control" name="tag" value="{{$artikel->tag}}"placeholder="Enter your tag" id="tag" rows='1'>
  </div>
  
  <button type="submit" class="btn btn-primary">UPDATE</button>
</form>
@endsection