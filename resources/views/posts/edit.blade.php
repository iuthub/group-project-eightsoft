@extends('layouts.app')

@section('content')

    <!-- Content body -->
    <div class="wrapper">
        <div class="container"><div class="row">
                <div class="col-lg-12 bar">
                    {!! Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

                    <h2>Edit post</h2>
                    <hr>

                    <div class="form-group">
                        {{Form::text('title', $post->title, ['class' => 'form-control input-lg', 'placeholder' => 'Title'])}}
                    </div>
                    <div class="form-group">
                        {{Form::text('description', $post->description, ['class' => 'form-control input-lg', 'placeholder' => 'Description'])}}
                    </div>

                    <select name="tags[]" id="tags" class="tagSelect" multiple aria-label="multiple select example">
                        <option selected> Open this select menu</option>
                        <option value="1">Machine Learning</option>
                        <option value="2">Deep Learning</option>
                        <option value="3">Data Science</option>
                        <option value="4">Python</option>
                        <option value="5">MLOps</option>
                        <option value="6">Big Data</option>
                    </select>

                    <div class="form-group">
                        {{Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Body'])}}
                    </div>


                    <label for="image" class="btn btn-primary">
                        Upload file
                    </label>

                    <div class="form-group">
                        <input type="file" class="form-control-file btn btn-primary" id="image" name="cover_image">
                    </div>

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Is it pinned?</label>
                    </div>

                    <div>
                        {{Form::hidden('_method', 'PUT')}}
                        {{Form::submit('Submit', ['class' => 'btn-lg pull-right'])}}
                        {!! Form::close() !!}
                    </div>

                    <div class="margin-8 clear"></div>

                </div>
            </div></div>
        <div class="clear"></div>
    </div>

@endsection
