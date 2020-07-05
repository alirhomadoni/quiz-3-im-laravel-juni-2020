@extends('layouts.master')
@section('content')
<form action="/artikel" method="POST">
@csrf
  <div class="form-group">
  <label for="judul">judul:</label>
    <textarea type="textarea" class="form-control" name="judul" placeholder="Enter your judul" id="judul" rows='1'></textarea>
    <label for="user_id">user_id:</label>
    <textarea type="textarea" class="form-control" name="user_id" placeholder="Enter your user_id" id="user_id" rows='1'></textarea>
    <label for="pertanyaan">isi:</label>
    <textarea type="textarea" class="form-control" name="isi" placeholder="Enter your artikel content" id="is" rows='3'></textarea>
    <label for="judul">tag:</label>
    <textarea type="textarea" class="form-control" name="tag" placeholder="Enter your tag" id="tag" rows='1'></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection