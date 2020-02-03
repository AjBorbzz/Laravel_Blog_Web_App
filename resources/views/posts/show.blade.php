@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-dark">Go Back</a>
<br>
<hr>
<h1>{{$post->title}}</h1>

<div class="container">
    <p>{{$post->body}}</p>
</div>

<hr>
<small>Written on : {{$post->created_at}}</small>
@endsection