<!DOCTYPE html>
<html>
<head>
    <title>{{ $title ?? 'E-Problems' }}</title>

    <script
crossorigin="anonymous"
integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
referrerpolicy="no-referrer"
src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    ></script>

    @vite(['resources/css/app.css', 'resources/js/app.ts'])
</head>
<body>
@yield('body')
</body>
</html>
