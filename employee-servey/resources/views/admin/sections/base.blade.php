<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Blank Page | Bootstrap Simple Admin Template</title>
        @yield('stylesheets')
        <link href="assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
        <link href="assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
        <link href="assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
        {{-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="assets/css/master.css" rel="stylesheet">
    </head>
    <body>
        
        @yield('content')
        <script src="assets/vendor/jquery/jquery.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>