<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- React contents -->
        @viteReactRefresh
        @vite(['resources/css/index.scss', 'resources/js/index.jsx'])
    </head>
    <body>
        <div id="root"><div/>
    </body>
</html>
