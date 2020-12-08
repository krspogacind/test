<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
    </head>
    <body>
        @yield('page title')

        @section('first chapter')
            <p>Some text. </p>
        @show


        <p>  
            @yield('second chapter')
        </p>
    </body>
</html>