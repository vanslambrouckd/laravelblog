<!doctype html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <title>Laravel blog test</title>
        <link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.css">
    </head>
    <body>
        <div class="container">
            @yield('content')
            <footer>
                @yield('footer')
            </footer>
        </div>

    </body>

</html>