<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" value="{{ csrf_token() }}">
    <title>Vue JS com operações em Laravel</title>

    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
</head>
<body>
    <div id="app">
        <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    </div>
</body>
</html>