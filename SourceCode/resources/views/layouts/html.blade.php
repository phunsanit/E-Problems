<!DOCTYPE html>
<html>
<head>
    <title>{{ $title ?? 'E-Problems' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.ts'])
</head>
<body>
@yield('body')
</body>
</html>