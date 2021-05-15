@extends('layouts.app')

@section('content')
    <h1>Posts</h1>

    @if(count($posts) > 0)
        <div class="card">
            <ul class="list-group list-group-flush">
                @foreach($posts as $post)
                    <li class="list-group-item">
                        <h3><a href="/posts/{{$post->id}}"> {{$post->title}} </a></h3>
                        <small> Created • {{$post->created_at}} </small>
                    </li>
                @endforeach
            </ul>
        </div>

    @else

    @endif


{{--    <h1>Hellooo</h1>--}}
@endsection
