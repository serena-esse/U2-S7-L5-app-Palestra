<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            body {
                background-image: url('../image.jpg');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                color: white;
                min-height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;
                margin: 0;
            }

            header {
                width: 100%;
            }

            nav {
                display: flex;
                justify-content: center;
                gap: 15px; /* Spazio tra i link */
            }

            a {
                color: white;       
                text-decoration: none; 
                font-weight: bold;
                font-size: 2em; 
            }
        </style>
    </head>
    <body>
        <div>
            <div>
                <header>
                    @if (Route::has('login'))
                        <nav>
                            @auth
                                <a href="{{ url('/dashboard') }}">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}">Login</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}">Register</a>
                                @endif
                            @endauth
                        </nav>
                    @endif
                </header>

                <main class="mt-6">
                    <!-- Contenuto principale -->
                </main>
            </div>
        </div>
    </body>
</html>
