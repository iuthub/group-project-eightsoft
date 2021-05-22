<!DOCTYPE html>
<html>

<head>
    <title>Login - Eightsoft blog</title>

    <meta name = "description" content = "Useful links to spend time toghether"/>
    <meta http-equiv = "Content-Type" content = "text/html"; charset = "utf-8"/>
    <meta name = "viewpoint" content = "width = device-width, initial-scale = 1.0"/>
    <meta name="author" content="Eightsoft">

    <link rel = "stylesheet" href="{{url('css/loginStyle.css')}}">

</head>

<body class = "color-change-2x">

<div id = "box">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <h1>LOGIN</h1>
        <div>
            <input class="input-field  @error('email') is-invalid @enderror" type = "text" name="email" value="{{ old('email') }}" placeholder="Email" maxlength = "20">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div>
            <input class="input-field @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="current-password" placeholder="Password" maxlength = "20">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <input type = "submit" name = "submit" value = "Login">

    </form>
    <p><a href="{{ route('register') }}">Register</a> <a href="{{ url('/') }}">Home</a></p>
</div>

</body>
</html>
