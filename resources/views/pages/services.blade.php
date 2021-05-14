@extends('layouts.app')

@section('content')
    <h1>Services!</h1>
    <h3>From controller: {{$title}}</h3>

    @if(count($services) > 0)
        <ul>
            @foreach($services as $service)
                <li>{{$service}}</li>
            @endforeach
        </ul>
    @endif
@endsection
