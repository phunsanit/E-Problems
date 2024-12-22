@extends('tickets.layout')

@section('content')

<div class="border border-gray-300 my-4 nt-bold p-4 rounded-lg shadow-lg">
	<div class="flex justify-between items-center">
		<h3>Tickets</h3>
		<a class="bg-green-500 font-bold hover:bg-green-700 px-2 py-1 rounded text-white text-xs" href="{{ url('/tickets/create') }}"><i class="fa-solid fa-plus"></i> Create New Ticket</a>
	</div>
	@if(session('success'))
		<p class="aze bdk">{{ session('success') }}</p>
	@endif
	<hr><br>
	<DataTables :uri="{{ url('/tickets/create') }}" />
	<hr><br>
</div>
@endsection
