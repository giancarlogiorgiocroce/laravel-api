<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/front/style.css') }}">
        <script src="{{ asset('js/front.js') }}"></script>
    </head>
    <body>
            @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ route('admin.index') }}">Admin</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="my_container">
                <h1>
                    Sono una prima pagina custom!
                </h1>
            </div>
    </body>
</html>
