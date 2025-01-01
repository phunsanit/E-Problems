@extends('tickets.layout')
@section('content')
<div class="border border-gray-300 my-4 nt-bold p-4 rounded-lg shadow-lg">
    <div class="flex justify-between items-center">
        <h3><i class="fa-regular fa-rectangle-list"></i> Tickets</h3>
        <a class="bg-green-500 font-bold hover:bg-green-700 px-2 py-1 rounded text-white text-xs" href="{{ url('/tickets/create') }}"><i class="fa-solid fa-plus"></i> Create New Ticket</a>
    </div>
    @if (session('success'))
    <div class="bg-green-500 text-white p-2 rounded mb-4 mt-2">
        {{ session('success') }}
    </div>
    @endif
    <div class="overflow-x-auto">
        <table class="table-bordered" id="tickets-list">
        </table>
    </div>
</div>
@endsection
@section('contentScript')
<script type="module">
    window.base = '{{ url('') }}';
    window.csrf_token = '{{ csrf_token() }}';
</script>
<script src="{{ asset('assets/tickets.list.js') }}" type="module"></script>
@endsection
