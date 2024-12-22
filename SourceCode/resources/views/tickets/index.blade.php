@extends('tickets.layout')

@section('content')
<div class="card mt-5">
	<h2 class="card-header">ticket</h2>
	<div class="card-body w-100">
		@if(session('success'))
		<div class="alert alert-success" role="alert">{{ session('success') }}</div>
		@endif

		<div class="d-grid gap-2">
			<a class="btn btn-success btn-sm w-100" href="{{ url('/tickets/create') }}"><i class="fa fa-plus"></i> Create New Ticket</a>
		</div>
		<data-tables></data-tables>
	</div>
</div>
@endsection