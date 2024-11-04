@extends('layout')

@section('content')
<div class="col-lg-12">
    <!-- <h3>Post Details</h3> -->
    <h5>ID :{{$post->id}}</h5>
    <h2>Name :{{$post->name}}</h2>
    <p>Details :{{$post->details}}</p>
    <p> <img src="/images/{{$post->image}}" alt="" width="300px"></p>
</div>
@endsection