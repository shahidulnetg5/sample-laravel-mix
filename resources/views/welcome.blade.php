<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NEC | ADMIN DASHBOARD</title>
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="#" id="doc">Documentation <i class="fa fa-book" aria-hidden="true"></i></a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News <i class="fa fa-newspaper-o" aria-hidden="true"></i></a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub <i class="fa fa-github" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <!-- Scripts -->
        <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    </body>
</html>
