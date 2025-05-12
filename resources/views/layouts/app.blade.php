<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Overwatch Forum - Backend Web</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
    </head>
    <body>
        <header>
            @include('layouts.navigation')
        </header>
        <!-- Page Content -->
        <main>
            @yield('content')
        </main>
    </body>
</html>
