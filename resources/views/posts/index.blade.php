@extends('layouts.app')

@section('content')

<!-- Content body -->
<div class="wrapper">
    <div class="container"><div class="row">
            <form action="">
                <div class="searchBar">
                    <div class="col-lg-3 searchBarItem">
                        <input class="form-control form-control-lg" type="text" placeholder="search">
                    </div>

                    <div class="col-lg-2 searchBarItem">
                        <select class="form-control form-control-lg">
                            <option value="" selected disabled>Author</option>
                            <option>Rustam</option>
                            <option>Abdullokh</option>
                            <option>Vladimir</option>
                        </select>
                    </div>

                    <div class="col-lg-2 searchBarItem">
                        <select class="form-control form-control-lg">
                            <option value="" selected disabled>Topic tags</option>
                            <option>Machine Learning</option>
                            <option>Deep Learning</option>
                            <option>Python</option>
                            <option>MLOps</option>
                            <option>Big data</option>

                        </select>
                    </div>

                    <div class="col-lg-2 searchBarItem">
                        <select class="form-control form-control-lg">
                            <option value="" selected disabled>Date</option>
                            <option>24 Hours</option>
                            <option>Last week</option>
                            <option>Last month</option>
                            <option>Last year</option>
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <button type="submit" class="btn btn-primary longButton">Search</button>
                    </div>

                </div>
            </form>



            <div class="col-lg-12 bar">
                @if(count($posts) > 0)
                    <?php
                    $counter = 1; ?>
                    @foreach($posts as $post)

                        <?php
                        if($counter % 2 != 0){
                        ?>

                        {{--  Left  Side --}}
                        <div class="col-sm-2 col-md-12 col-lg-12"></div>

                        <div class="col-lg-3 col-md-3 col-sm-8 img-bar border-right">
                            <?php
                            $imgName = "ML".$counter;?>

                            <img class="img-responsive" src="{{ asset('img/'.$imgName.'.png') }}" alt="Robot">

                        </div>

                        <div class="clear-both-sm"></div><div class="col-sm-2"></div>

                        <div class="col-lg-9 col-md-9 col-sm-8 content-bar">
                            <div class = "h1"><a href="/blog/{{$post->id}}" class="tracking-in-expand">{{$post->title}}</a></div>
                            <p>{{$post->description}}</p>
                            <a href="#" class="btn topicTag no-click" role="button" disabled>Computer vision</a>
                            <a href="#" class="btn topicTag no-click" role="button" disabled>Info</a>
                            <a href="#" class="btn topicTag no-click" role="button" disabled>Object detection</a>
                        </div>

                        <div class="margin8"></div>

                        <?php
                        }
                        else{?>

                        {{--  Right Side --}}
                            <?php
                            $imgName = "ML".$counter;?>

                        <div class="col-sm-2 col-md-12 col-lg-12"></div>

                        <div class="col-lg-3 col-md-3 col-sm-8 img-bar pull-right border-left">
                            <img class="img-responsive" src="{{ asset('img/'.$imgName.'.png') }}" alt="Robot">
                        </div>

                        <div class="clear-both-sm"></div><div class="col-sm-2"></div>

                        <div class="col-lg-9 col-md-9 col-sm-8 content-bar">
                            <div class = "h1 text-right"><a href="/blog/{{$post->id}}"  class="tracking-in-expand">{{$post->title}}</a></div>
                            <p class = "text-right">{{$post->description}}</p>
                        </div>

                        <div class="margin8"></div>
                        <?php }?>

                        <?php
                            $counter = $counter + 1;
                            if ($counter > 4) {
                                $counter = 1 ;
                            } ?>
                    @endforeach
                @endif


            </div>

        </div></div>
    <div class="clear"></div>
</div>



@endsection
