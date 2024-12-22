@extends('layouts.html')

@section('body')
<div class="flex" id="app">
    <div class="w-3/10 h-screen bg-gray-800 text-white p-4">
        <h2 class="text-xl font-bold mb-4">E-Problems</h2>
        <ul>
            <li><a href="{{ url('/tickets') }}" class="block py-2">Tickets</a></li>
            <li><a href="{{ url('/tickets/create') }}" class="block py-2">Create Ticket</a></li>
        </ul>
    </div>
    <div class="w-7/10 p-4">
        @yield('module')
    </div>
</div>
@endsection
