@extends('layouts.app')

@section('content')

<div class="container" style="padding: 50px 0 100px 20px" >
    <div id="box">
        <form method="POST" action="{{ route('register') }}" style="max-width:500px;margin:auto; padding-bottom: 40px">
            @csrf
            <h2>Register Form</h2>
            <div class="input-container">
                <i class="fa fa-user icon"></i>
                <input class="input-field @error('name') is-invalid @enderror" type="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Username">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="input-container">
                <i class="fa fa-envelope icon"></i>
                <input type="email" class="input-field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="input-container">
                <i class="fa fa-key icon"></i>
                <input type="password" class="input-field @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="input-container">
                <i class="fa fa-check icon"></i>
                <input type="password" class="input-field" name="password_confirmation" required autocomplete="new-password" placeholder="Password Confirmation">
            </div>
            <button type="submit" class="btn">Register</button>
        </form>
    </div>
</div>
@endsection
