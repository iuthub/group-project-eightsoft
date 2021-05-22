
@extends('layouts.app')
@section('content')
<!-- Content body -->
<div class="wrapper">
    <div class="container"><div class="row">

            <div class="col-lg-12 bar">

                <h2>Contact</h2>
                <hr>

                <form action="">
                    <div class="form-group">
                        <input type="text" placeholder="Your name" class="form-control input-lg">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="E-mail" class="form-control input-lg">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Your response"></textarea>
                    </div>
                    <button class = "btn-lg btn-warning pull-right">Submit</button>
                </form>

                <div class="margin-8 clear"></div>

            </div>

        </div></div>
    <div class="clear"></div>
</div>
@endsection
