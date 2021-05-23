@extends('layouts.app')

@section('content')

    <!-- Content body -->
    <div class="wrapper">
        <div class="container"><div class="row">

                <!-- Images + Photo -->

                <div class="col-lg-12">     <div class="row">

                        <div class="col-lg-12">
                            <div class="row backgroundImage">
                                <div class="col-lg-6">
                                    <div class="contentBlock">
                                        <h6>ABOUT</h6>
                                        <h1>Bringing the benefits of AI to everyone</h1>
                                        <p>We provide a platform for thousands of people to exchange ideas and to
                                            expand our understanding of data science. While we allow
                                            authors to publish articles,
                                            we do not endorse each author’s contribution.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6"></div>
                            </div>
                        </div>

                        @if(count($posts) > 0)

                            @foreach($posts as $post)
                                <div class="col-sm-6 col-md-4">

                                    <div class="thumbnail">
                                        <img src="/storage/cover_image/{{$post->cover_image}}" alt="Title">
                                        <div class="caption">
                                            <h3><a href="/blog/{{$post->id}}"> {{$post->title}} </a></h3>
                                            <p>Description</p>
                                            <p><a href="#" class="btn btn-primary" role="button">Like</a>
                                                <a href="#" class="btn btn-primary" role="button">Comment</a>
                                                <a href="/blog/{{$post->id}}" class="btn btn-primary" role="button">Read more</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="jumbotron jumbotron-fluid aboutPost">
                <div class="jumbotron ">
                    <h6>BLOG</h6>
                    <h2>Read our blog</h2>
                    <p>We provide a platform for thousands of people to exchange ideas and to
                        expand our understanding of data science. While we allow
                        authors to publish articles,
                        we do not endorse each author’s contribution.</p>
                    <a class="btn btn-primary btn-lg" href="blog.html" role="button">Learn more</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="jumbotron jumbotron-fluid aboutPost aboutPostLeft">
                        <div class="jumbotron ">
                            <h6>DASHBOARD</h6>
                            <h2>Discover</h2>
                            <p>We provide a platform for thousands of people to exchange ideas and to
                                expand our understanding of data science. While we allow
                                authors to publish articles,
                                we do not endorse each author’s contribution.</p>
                            <a class="btn btn-primary btn-lg" href="dashboard.html" role="button">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="row">
                    <div class="jumbotron jumbotron-fluid aboutPost aboutPostRight">
                        <div class="jumbotron ">
                            <h6>CONTACTS</h6>
                            <h2>Contact us</h2>
                            <p>We provide a platform for thousands of people to exchange ideas and to
                                expand our understanding of data science. While we allow
                                authors to publish articles,
                                we do not endorse each author’s contribution.</p>
                            <a class="btn btn-primary btn-lg" href="contact.html" role="button">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="clear"></div>
    </div>



@endsection
