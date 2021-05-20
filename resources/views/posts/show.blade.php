@extends('layouts.app')

@section('content')


    <div class="container" style="padding-left:20px">
        <a href="/posts"><input type="submit" value="Go back"></a>
        <hr class="solid">
        <div>
            <a href="#author1" class="author">Anna Jacobson</a>
            <span class="dot"></span>
            <span class="date"> {{$post->created_at}} </span>
        </div>
        <div>
            <h1> {{$post->title}} </h1>
            <h3>Using Machine Learning to Understand Election Interference</h3>
            <img style="width: 100%;" src="/storage/cover_image/{{$post->cover_image}}" alt="">
            <div class="description">
                A joint article about causality and interpretable machine learning with Eleanor Dillon, Jacob LaRiviere,
                Jonathan Roth, and Vasilis Syrgkanis from Microsoft.
            </div>
            <div>
                <p class="text">
                    {{$post->body}}
                </p>
            </div>
        </div>

        @if(!Auth::guest())
            @if(Auth::user()->id == $post->user_id)

                <a href="/posts/{{$post->id}}/edit"><input type="submit" value="Edit"> </a>

                {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn' ])}}
                {!! Form::close() !!}
            @endif
        @endif
    </div>

@endsection
