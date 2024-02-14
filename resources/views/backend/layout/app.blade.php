<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="{{asset('favicon.ico')}}">

        <title>@yield('title')</title>

        <!-- Bootstrap core CSS -->
        <link href="{{asset('dist/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="{{asset('dashboard.css')}}" rel="stylesheet">
        @include('backend/inc/styles')
    </head>
    <body>

        @include('backend.inc.header')

        <div class="container-fluid">

            <div class="row">

                @include('backend.inc.sidebar')

                @yield('content')

             @include('backend.inc.scripts')
            </div>
        </div>
    </body>
</html>