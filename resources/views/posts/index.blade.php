@extends('layouts.app')

@section('content')
    {{--    <h1>Welcome!</h1>--}}
    {{--    <h3>{{ $title }}</h3>--}}


    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="container" style="padding-left:20px">
                <div>
                    <a href="#author1" class="author">Anna Jacobson</a>
                    <span class="dot"></span>
                    <span class="date"> {{$post->created_at}} </span>
                </div>
                <div>
                    <h1><a href="/posts/{{$post->id}}"> {{$post->title}} </a></h1>
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
                        <div class="more">
                            <a href="/posts/{{$post->id}}">Read more</a>
                            <span class="dot"></span>
                            <span>18 min read</span>
                        </div>
                    </div>
                </div>
                <div>
                    <form action="">
                        <textarea id="subject" name="subject" placeholder="Leave your comment.." style="height:60px"></textarea>

                        <input type="submit" value="Comment">
                    </form>
                </div>
                <hr class="solid">
            </div>
        @endforeach

    @else
    @endif


@endsection
