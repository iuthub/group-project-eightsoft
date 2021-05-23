@extends('layouts.app')

@section('content')

    <!-- Content body -->
    <div class="wrapper">
        <div class="container"><div class="row">
                <a href="/blog"> <button class="btn-lg btn-secondary longButton" >Go back</button></a>

                <div class="col-lg-12 bar">

                    <h2>{{$post->title}}</h2>
                    <h3>All about AI</h3>
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

                    <form action="">
                        <div class="form-group">
                            <input type="text" placeholder="Your name" class="form-control input-lg">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Max 250 characters"></textarea>
                        </div>
                        <div class="submitButton">
                            <button class = "btn-lg btn-warning">Submit</button>
                        </div>
                    </form>

                    <hr>

                    <div class="panel panel-info">
                        <div class="panel-heading"><i class= "glyphicon glyphicon-user"></i><span>Rustam</span></div>
                        <div class="panel-body">
                            Super!
                        </div>
                    </div>

                    <div class="panel panel-info">
                        <div class="panel-heading"><i class= "glyphicon glyphicon-user"></i><span>Vladimir</span></div>
                        <div class="panel-body">
                            Wow that's very informative
                        </div>
                    </div>
                </div></div>
        </div>
        <div class="clear"></div>
    </div>


@endsection
