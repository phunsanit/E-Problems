@extends('tickets.layout')

@section('content')
<div class="card mt-5">
	<h2 class="card-header">Tickets</h2>
	<div class="flex justify-end w-full p-2.5">
		<a class="btn btn-success btn-sm" href="{{ url('/tickets/create') }}"><i class="fa fa-plus"></i> Create New Ticket</a>
	</div>
	<div class="card-body w-100">
		@if(session('success'))
		<div class="alert alert-success" role="alert">{{ session('success') }}</div>
		@endif
		<data-tables></data-tables>
	</div>
</div>
@endsection