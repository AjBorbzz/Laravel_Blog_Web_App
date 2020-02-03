<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/blog.css')}}">

        <title>{{config('app.name','AJBorbz')}}</title>

    </head>
    <body>
        <div class="container">
        @include('inc.navbar')
        <main role="main">
                @yield('content')
        </main>
        </div>
    </body>
</html>
