<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/jquery/jquery-ui.min.css">

</head>
<body>

    
    @include('layouts.nav')

    @yield('content')

    @include('layouts.footer')

    
    <script src="/public/jquery/jquery-3.7.1.min.js"></script>
    <script src="/public/js/bootstrap.min.js"></script>
    <script src="/public/jquery/jquery-ui.min.js"></script>
    

</body>
</html>
