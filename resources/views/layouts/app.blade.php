<!doctype html>

<html lang="en">
    <head>
        <title>Cool Blog @yield('title')</title>
    </head>

    <body>

        <h1> Cool Blog  @yield('title')</h1>

        <div>
            @yield('content')
        </div>

        <a href={{ route('users.index') }}>Link to users</a>

    </body>
</html>