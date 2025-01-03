@extends('layouts.html')

@section('body')
<div class="flex gap-4" id="appModule">
    <div class="p-4 w-500">
        <h2 class="text-xl font-bold mb-4"><i class="fa-solid fa-ticket"></i> E-Problems</h2>
        <ul>
            <li><a href="{{ url('/tickets') }}" class="block py-2"><i class="fa-regular fa-rectangle-list"></i> Tickets</a></li>
            <li><a href="{{ url('/tickets/create') }}" class="block py-2"><i class="fa-solid fa-plus"></i> Create Ticket</a></li>
        </ul>
    </div>
    <div class="flex-1 p-4">
        @yield('module')
    </div>
</div>
@endsection