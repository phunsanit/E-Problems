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

	<script setup>
		var options = {
			"ajax": {
				"headers": {
					"X-CSRF-TOKEN": "{{ csrf_token() }}",
					"X-Requested-With": "XMLHttpRequest"
				},
				"type": "GET",
				"url": "{{ url('/tickets') }}",
			},
			"columns": [
				{
					"orderable": false,
					"render": function (data, type, row, meta) {
						return parseInt(meta.row) + parseInt(meta.settings._iDisplayStart) + 1;
					},
					"title": 'No.',
					"width": "10px",
				},
				{
					"orderable": false,
					"render": function (data, type, row, meta) {
						return '<input type="checkbox" value="' + row.DISTRICT_CODE + '">';
					},
					"title": '<input class="checkAll" type="checkbox">',
					"width": "10px",
				},
				{ "data": "id" },
				{ "data": "category_id" },
				{ "data": "vessel_id" },
				{ "data": "service_lines_id" },
				{ "data": "support_engineer_id" },
				{ "data": "sla_dt" },
				{ "data": "working_time" }
			],
			"lengthMenu": [10, 25, 50, 75, 100],
			"order": [[0, "asc"]],
			"pageLength": 10,
			"processing": true,
			"serverSide": true,
			"stateSave": true,
		};
	</script>
	<hr><br>
	<DataTables uri="http://127.0.0.1:8000/mtickets/index.json" :options="{{ json_encode($options) }}" />
	<hr><br>
</div>
@endsection
