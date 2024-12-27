@extends('tickets.layout')

@section('content')
<div class="card mt-5">
    <h2 class="card-header">Show Ticket: {{ $ticket->status_id }}</h2>
    <div class="card-body">

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary btn-sm" href="{{ url('tickets') }}"><i class="fa fa-arrow-left"></i> Back</a>
        </div>
        <div class="overflow-x-auto">
            <table class="table-bordered">
                <colgroup>
                    <col class="w-2/10 md:w-1/4">
                    <col class="w-8/10 sm:w-full">
                </colgroup>
            <tbody>
                <tr>
                <th>Case ID:</th>
                <td>{{ $ticket->id }}</td>
                </tr>
                <tr>
                <th>Status:</th>
                <td>{{ $ticket->status_id }}</td>
                </tr>
                <tr>
                <th>Category:</th>
                <td>{{ $ticket->category->title }}</td>
                </tr>
                <tr>
                <th>Vessel:</th>
                <td>{{ $ticket->vessel->title }}</td>
                </tr>
                <tr>
                <th>Service Lines:</th>
                <td>{{ $ticket->serviceLine->title }}</td>
                </tr>
                <tr>
                <th>Support Engineer ID:</th>
                <td>{{ $ticket->supportEngineer->name }}</td>
                </tr>
                <tr>
                <th>SLA:</th>
                <td>{{ $ticket->sla_dt }}</td>
                </tr>
                <tr>
                <th>Working Time:</th>
                <td>{{ $ticket->working_time }}</td>
                </tr>
                <tr>
                <th>Descriptions:</th>
                <td>{{ $ticket->descriptions }}</td>
                </tr>
                <tr>
                <th>Created By:</th>
                <td>{{ $ticket->created_by }}</td>
                </tr>
                <tr>
                <th>Updated By:</th>
                <td>{{ $ticket->updated_by }}</td>
                </tr>
                <tr>
                <th>Deleted By:</th>
                <td>{{ $ticket->deleted_by }}</td>
                </tr>
            </tbody>
            </table>
        </div>
        </div>
    </div>
</div>
@endsection
