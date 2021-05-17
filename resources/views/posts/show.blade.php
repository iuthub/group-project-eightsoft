@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-block">Go back</a>
    <h1> {{$post->title}} </h1>
    <div class="row">
        <div class="col-md-12">
            <img style="width: 100%;" src="/storage/cover_image/{{$post->cover_image}}" alt="">
        </div>
    </div>
    <small> Created • {{$post->created_at}} </small>
    <hr>

    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <p> {{$post->body}} </p>

            <a href="/posts/{{$post->id}}/edit" class="btn">Edit</a>

            {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn' ])}}
            {!! Form::close() !!}
        @endif
    @endif

@endsection
