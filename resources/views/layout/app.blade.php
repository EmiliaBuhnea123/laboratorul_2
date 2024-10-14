<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>
<body class="font-sans m-0 p-0 bg-stone-100">

    {{-- <nav>
        <ul>
            <li><a href="{{ route('home') }}">Acasă</a></li>
            <li><a href="{{ route('about') }}">Despre noi</a></li>
            <li><a href="{{ route('tasks.create') }}">Adaugă Sarcină</a></li>
            <li><a href="{{ route('tasks.index') }}">Lista Sarcini</a></li>
        </ul>
    </nav> --}}

    <x-header />

    <div class="container max-w-4xl mx-auto my-5 p-5 bg-white rounded-lg shadow-lg">
        @yield('content')
    </div>

</body>
</html>
