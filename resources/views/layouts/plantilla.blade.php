<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield("title")</title>
        {{-- {{ config("app.name") }} --}}
        {{-- favicon --}}
        {{-- estilos --}}
    </head>
    <body class="antialiased">
        {{-- header --}}
        {{-- nav --}}

        @yield("content")
        {{-- footer --}}
        {{-- script --}}
    </body>
</html>
