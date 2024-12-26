<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'E-Problems' }}</title>
    @vite(['resources/css/app.css'])
</head>
<body>
@vite(['resources/js/app.ts'])
@yield('body')
@yield('contentScript')
</body>
</html>