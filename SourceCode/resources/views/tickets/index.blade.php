@extends('tickets.layout')

@section('content')
<div class="card mt-5">
	<h2 class="card-header">ticket</h2>
	<div class="card-body">
		@if(session('success'))
		<div class="alert alert-success" role="alert">{{ session('success') }}</div>
		@endif
		<div class="d-grid gap-2 d-md-flex justify-content-md-end">
			<a class="btn btn-success btn-sm" href="{{ url('/tickets/create') }}"><i class="fa fa-plus"></i> Create New Ticket</a>
		</div>
<table class="table table-bordered table-striped mt-4" id="myTable">
    <thead>
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
        </tr>
        <tr>
            <td>Garrett Winters</td>
            <td>Accountant</td>
            <td>Tokyo</td>
        </tr>
        </tbody>
</table>

  <DataTablesComponent />
	</div>
</div>
@endsection