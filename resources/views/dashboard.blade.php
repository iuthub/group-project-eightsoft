@extends('layouts.app')

@section('content')

<!-- Content body -->
<div class="wrapper">
    <div class="container"><div class="row">

            <div class="col-lg-12 bar">


                <div class="container">    <div class="panel panel-default">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <a  href="{{ url('blog/create') }}"> <button class = "btn-lg btn-secondary longButton" >Create new post</button></a>

                        <div class="panel-heading "> <p class = "text-center"> Your posts</p> </div>

                        <table class="table table-striped">

                            <thead>
                            <tr>
                                <th></th>
                                <th>Title</th>
                            </tr>
                            </thead>

                            <tbody>
                            @if(count($posts) > 0)
                                @foreach($posts as $post)
                                    <tr>
                                        <td class="col-lg-1 col-md-1 col-xs-2">
                                        </td>
                                        <td class="vert-align"><a href="/blog/{{$post->id}}">{{$post->title}}</a></td>
                                        <td class="text-center vert-align"><a href="/blog/{{$post->id}}/edit"><button class = "btn-lg btn-secondary" >Edit</button></a></td>

                                        <td class="text-center vert-align">
                                            {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn-lg btn-secondary' ])}}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>

                                @endforeach
                            @else
                                <tr>
                                    <th><p>You don't have posts yet</p></th>
                                </tr>

                            @endif

                            </tbody>


                        </table>

                    </div>     </div>

            </div>

        </div></div>
    <div class="clear"></div>
</div>

@endsection

