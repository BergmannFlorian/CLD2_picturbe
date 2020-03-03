<html>
    <head>
        <meta charset="utf-8">
        <title>App Name - @yield('title')</title>
        <meta name="csrf-tokeen" content="{{ csrf_token() }}">
    </head>
    <body>
        <div class="container">
            @yield('content')
            @stack('scripts')
        </div>
    </body>
</html>