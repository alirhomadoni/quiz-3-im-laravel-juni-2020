@extends('layouts.master')
@section('content')
<h2>Judul Artikel : <h3>{{$artikel->judul}}</h3></h2>
<h2>ISI Artikel : </h2>
<p>{{$artikel->isi}}</p>
</br>
<p>date of created : {{$artikel->created_at}}</p>
<p>date of updated : {{$artikel->updated_at}}</p>
<p>tag : {{$artikel->tag}}</p>
<p>slug : {{$artikel->slug}}</p>
</br>


<a class="btn btn-primary" href="/pertanyaan" role="button">Kembali ke Index</a>
@endsection 