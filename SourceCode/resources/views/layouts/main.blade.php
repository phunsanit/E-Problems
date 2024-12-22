@extends('layouts.html')

@section('body')
<div class="flex gap-4" id="app">
    <div class="w-500 p-4">
        <h2 class="text-xl font-bold mb-4">E-Problems</h2>
        <ul>
            <li><a href="{{ url('/tickets') }}" class="block py-2">Tickets</a></li>
            <li><a href="{{ url('/tickets/create') }}" class="block py-2">Create Ticket</a></li>
        </ul>
    </div>
    <div class="flex-1 p-4">
        @yield('module')
    </div>
</div>
@endsection