<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <header>
        <nav class="navbar-dark p-5">
            <div class="container-fluid d-flex justify-content-around align-items-center">
                <p class="text-white fs-2">Movies</p>
                <div class="text-white d-flex">
                    <a class="mx-4 fs-5" href="{{ route('home') }}">Home</a>
                    <a class="mx-4 fs-5" href="{{ route('movies.index') }}">Movies List</a>
                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

</body>

</html>
