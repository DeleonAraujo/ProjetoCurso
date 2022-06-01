<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('website/css/style.css') }}">
</head>
<body>
    @yield('content')

    <script src="{{ asset('website/js/jquery.js') }}"></script>
    <script src="{{ asset('website/js/bootstrap.js') }}"></script>

</body>
</html>
