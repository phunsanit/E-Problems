<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'E-Problems' }}</title>
    @livewireStyles
    @vite(['resources/sass/app.scss', 'resources/js/app.ts'])
</head>
<body>
@yield('body')
@livewireScripts
@yield('contentScript')
</body>
</html>
