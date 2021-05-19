<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Eightsoft Blog</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googlea pis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>


<div class="header">
    <a href="{{ url('/') }}" class="logo">EightSoft Blog</a>
    <div class="header-right">
        <a class="active" href="/home">Home</a>
        <a href="#contact">Dashboard</a>
        <a href="/about">About</a>
        <a href="/posts">Blog</a>
{{--        <a href="#contact">Register</a>--}}
{{--        <a href="#about">Login</a>--}}
        <!-- Authentication Links -->
        @guest
            @if (Route::has('login'))
                <a href="{{ route('login') }}">{{ __('Login') }}</a>
            @endif

            @if (Route::has('register'))
                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif
        @else
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
        @endguest

    </div>
</div>

    <main class="py-4 container">
        @include('inc.messages')
        @yield('content')
    </main>

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div>
                <h6>About</h6>
                <p class="text-justify"><i>EightSoft BLOG</i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    In risus nibh, sodales eu ultrices vel, gravida in lacus. Vivamus non venenatis mi. Fusce bibendum
                    scelerisque dui, eu condimentum quam efficitur fermentum. Vestibulum ante ipsum primis in faucibus
                    orci luctus et ultrices posuere cubilia curae; Sed venenatis viverra laoreet. Curabitur non
                    efficitur tortor. Praesent lacinia ante elit, a consectetur ante tempor id. Quisque magna est,
                    iaculis quis egestas quis, condimentum non libero.</p>
            </div>

            <div>
                <h6>Contacts</h6>
                <ul class="footer-links">
                    <li><a href="http://scanfcode.com/category/front-end-development/">Tashkent, Uzbekistan</a></li>
                    <li><a href="http://scanfcode.com/category/back-end-development/">+99897 777-77-77</a></li>
                    <li><a href="http://scanfcode.com/category/java-programming-language/">eightsoft@info.com</a></li>
                </ul>
            </div>
        </div>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
                <p class="copyright-text">Copyright &copy; Blog by
                    <a href="#">EightSoft</a>.
                </p>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
