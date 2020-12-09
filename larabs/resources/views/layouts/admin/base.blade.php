<!DOCTYPE html>
<html lang="ru">
<head>
    <base href="{{ env('APP_URL') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="theme/css/vendors.css">
</head>
<body>
    @yield('content')
    <link rel="stylesheet" href="theme/css/admin/admin.css">
    <script src="theme/js/site.js"></script>
</body>
</html>
