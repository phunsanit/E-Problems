<!DOCTYPE html>
<html>
<head>
    <title>E-Problems</title>
    @ vite(['resources/css/app.css', 'resources/js/app.js']) 
</head>
<body>

<div class="flex">
    <div class="w-1/4 h-screen bg-gray-800 text-white p-4">
        <h2 class="text-xl font-bold mb-4">E-Problems</h2>
        <ul>
           
        </ul>
    </div>
    <div class="w-3/4 p-4">
    @yield('content')
    </div>
</div>

</body>
</html>
