@extends('layouts.app')

@section('content')
    {{--    https://laravelcollective.com/docs/6.x/html--}}

    <div class="container" style="padding-left:20px">
        {!! Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <h1>Edit Post</h1>
        <div>
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div>
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Body'])}}
        </div>
        <div>
            {{Form::file('cover_image')}}
            <hr class="solid">
        </div>

        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>

@endsection
