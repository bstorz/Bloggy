<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title>Bloggy</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            @if (Session::has("flash_message"))
                <div class="alert alert-success"> {{ Session::get("flash_message") }} </div>
            @endif

            @yield('content')
        </div>
    </body>
</html>
