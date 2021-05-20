@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(count($posts) > 0)
                            <table style="max-width:600px;margin:auto; padding-bottom: 40px">
                                <!--<tr>
                                    <td colspan="2">Dashboard</td>
                                </tr>-->
                                <tr>
                                    <th colspan="2"><h2>Your Blog Post</h2></th>
                                </tr>

                                <tr>
                                    <th colspan="2"> <a href="posts/create"><input type="submit" value="Create Post"></a></th>
                                </tr>

                                <tr>
                                    <th colspan="2">Title</th>
                                </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <th><a href="/posts/{{$post->id}}"> {{$post->title}} </a></th>
                                    <td><a href="/posts/{{$post->id}}/edit" > Edit </a></td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You don't have posts yet</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
