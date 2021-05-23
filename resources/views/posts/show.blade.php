@extends('layouts.app')

@section('content')

    <!-- Content body -->
    <div class="wrapper">
        <div class="container"><div class="row">
                <a href="/blog"> <button class="btn-lg btn-secondary longButton" >Go back</button></a>

                <div class="col-lg-12 bar">

                    <h2>{{$post->title}}</h2>
                    <h3>{{$post->description}}</h3>
                    <hr>

                    <div class="viewThumbnail">
                        <!-- <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/eRu30Fi3_Wo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        <img src="/storage/cover_image/{{$post->cover_image}}" alt="Thumbnail photo">
                    </div>
                    <div class="well text-center">
                        Date: <span class = "badge">{{$post->created_at->year}}</span>
                        <a href="#" class="btn likeButton" role="button">Likes: <span class = "badge">8</span></a>
                        Author: <span class = "badge">{{$post->user_id}}</span>
                    </div>

                    <div class="margin-8"></div>

                    <h2>Article body</h2>
                    <hr>

                    <div class="well">
                        {{$post->body}}
                    </div>

                    <div class="margin-8"></div>

                    <h2>Comments</h2>
                    <hr>


                    {!! Form::open(['action' => 'App\Http\Controllers\CommentsController@store', 'method' => 'POST']) !!}
                    <div class="form-group">
                        {{Form::text('name', '', ['class' => 'form-control input-lg', 'placeholder' => 'Your name'])}}
                    </div>
                    <div class="form-group">
                        {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body'])}}
                    </div>
                    <input type="hidden" name="postid" value="{{ $post->id }}" />
                    <div class="form-group">
                        <div class="submitButton">
                            {{Form::submit('Submit', ['class' => 'btn-lg pull-right btn-warning'])}}
                        </div>
                        {!! Form::close() !!}
                    </div>
                    <br><br>
                    <hr>

                    @if(count($comments) > 0)
                        @foreach($comments as $comment)
                            <?php
                            if ($post->id == $comment->post_id){
                                ?>
                            <div class="panel panel-info">
                                <div class="panel-heading"><i class= "glyphicon glyphicon-user"></i><span>{{$comment->name}}</span></div>
                                <div class="panel-body">
                                    {{$comment->body}}
                                </div>
                            </div>

                            <?php
                            }
                            ?>

                        @endforeach
                    @endif


                </div></div>
        </div>
        <div class="clear"></div>
    </div>


@endsection
