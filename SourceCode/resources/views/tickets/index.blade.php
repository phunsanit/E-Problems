@extends('tickets.layout')

@section('content')
<div class="border border-gray-300 my-4 nt-bold p-4 rounded-lg shadow-lg">
	<div class="flex justify-between items-center">
		<h3>Tickets</h3>
		<a class="bg-green-500 font-bold hover:bg-green-700 px-2 py-1 rounded text-white text-xs" href="{{ url('/tickets/create') }}"><i class="fa-solid fa-plus"></i> Create New Ticket</a>
	</div>
	@if(session('success'))
		<p class="aze bdk">session('success') }}</p>
	@endif
	<table class="w-full" id="tickets-list">
	</table>
</div>
@endsection

@section('contentScript')
<script>
	const base = '{{ url('') }}';
	const csrf_token = '{{ csrf_token() }}';
</script>
<script src="{{ asset('assets/tickets.list.js') }}"></script>
@endsection