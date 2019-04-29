<html>
    <head>
        <title>Laravel Demo - @yield('title')</title>
    </head>
    <body>
        <div id="header">
            @section('header')
                This is the master header.
            @show
        </div>
        <div class='wrapper' id="@yield('title')-wrapper">
            @yield('content')
        </div>
        <div id="footer">
            @section('footer')
                This is the master footer.
            @show
        </div>
    </body>
</html>
