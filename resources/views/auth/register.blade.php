<!DOCTYPE html>
<html>

<head>
    <title>Register - Eightsoft blog</title>

    <meta name = "description" content = "Useful links to spend time toghether"/>
    <meta http-equiv = "Content-Type" content = "text/html"; charset = "utf-8"/>
    <meta name = "viewpoint" content = "width = device-width, initial-scale = 1.0"/>
    <meta name="author" content="Eightsoft">

    <link rel = "stylesheet" href="{{url('css/loginStyle.css')}}">

</head>

<body class = "color-change-2x">

<div id = "box">
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <h1>REGISTER</h1>
        <div>
            <input class="input-field @error('name') is-invalid @enderror" type = "text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Username" maxlength = "20">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div>
            <input class="input-field @error('email') is-invalid @enderror" type = "text" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" maxlength = "25">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div>
            <input type = "password" class="input-field @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password" maxlength = "20">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div>
            <input type="password" class="input-field" name="password_confirmation" required autocomplete="new-password" placeholder="Password Confirmation">
        </div>

        <input type = "submit" name = "submit" value = "Register">
    </form>
    <p><a href="{{ route('login') }}">Login</a> <a href="{{ url('/') }}">Home</a></p>
</div>

</body>
</html>
