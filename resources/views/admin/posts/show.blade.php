@extends('layouts.admin')


@section('content')


<div class="container mt-2">
    <div class="img">
        <img width="600" class="img-fluid" src="{{$post->cover_image}}" alt="{{$post->title}}">
    </div>
    <div class="content">
        <h1>{{$post->title}}</h1>
        {{$post->content}}
    </div>
</div>
@endsection