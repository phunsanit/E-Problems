@extends('tickets.layout')

@section('content')
<div class="card mt-5">
	<h2 class="card-header">ticket</h2>
	<div class="card-body">
		@if(session('success'))
		<div class="alert alert-success" role="alert">{{ session('success') }}</div>
		@endif





		<welcome />









		<div class="d-grid gap-2 d-md-flex justify-content-md-end">
			<a class="btn btn-success btn-sm" href="{{ url('/tickets/create') }}"><i class="fa fa-plus"></i> Create New Ticket</a>
		</div>

		<br>
		<hr>
		<br>
        <DataTables caption="Tickets Table" class="table table-bordered table-striped mt-4" id="myTable" url="{{ url('/api/tickets') }}"></DataTables>
		<br>
		</hr>
	</div>
</div>
@endsection
