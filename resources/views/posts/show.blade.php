@extends('layouts.app')

@section('content')
    <h1> {{$post->title}} </h1>
    <small> Created • {{$post->created_at}} </small>
    <hr>

    <p> {{$post->body}} </p>


    <a href="/posts" class="btn btn-default">Go back</a>

@endsection
