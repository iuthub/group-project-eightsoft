@extends('layouts.app')

@section('content')

<div class="container" style="padding: 50px 0 100px 20px" >
    <div id="box">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <h2>Log in to your Account</h2>
            <div class="input-container">
                <i class="fa fa-user icon"></i>
                <input class="input-field  @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="input-container">
                <i class="fa fa-key icon"></i>
                <input class="input-field @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="current-password" placeholder="Password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
    </div>
</div>

@endsection
