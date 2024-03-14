<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>title</title>
</head>
<body>
    @include('sweetalert::alert')

    @yield('contenido')
    <script src="{{asset('js/jq.js')}}"></script>
    <script src="{{mix('js/app.js')}}"></script>
    @yield('scripts')
</body>
</html>