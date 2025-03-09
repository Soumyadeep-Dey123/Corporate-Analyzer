<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield(section : 'title') | Admin Dashboard</title> 
        {{-- All stylesheet files     --}}
        <link rel="stylesheet" href="{{ asset('fontawesome\css\fontawesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('fontawesome\css\solid.min.css') }}">
        <link rel="stylesheet" href="{{ asset('fontawesome\css\brands.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bootstrap\css\bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css\admin\master.css') }}">
        @yield('stylesheets')
        
    </head>
    <body>
        <div class="wrapper">
            {{-- Main content --}}
            @yield('content')
        </div>

        {{-- Javascript Files --}}
        <script src="{{ asset('jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        @yield('js-files')   
        <script src="{{ asset('js/admin/script.js') }}"></script>     
    </body>
</html>