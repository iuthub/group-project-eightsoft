@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-block">Go back</a>
    <h1> {{$post->title}} </h1>
    <small> Created • {{$post->created_at}} </small>
    <hr>

    <p> {{$post->body}} </p>

    <a href="/posts/{{$post->id}}/edit" class="btn btn-group">Edit</a>

@endsection
