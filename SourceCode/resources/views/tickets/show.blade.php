@extends('tickets.layout')
@section('content')
<div class="card mt-5">
    <h2 class="card-header"><i class="fa-regular fa-file"></i> Show Ticket: {{ $ticket->status_id }}</h2>
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
                <colgroup>
                    <col class="w-2/10 md:w-1/4">
                    <col class="w-2/10 md:w-1/4">
                    <col class="w-2/10 md:w-1/4">
                    <col class="w-2/10 md:w-1/4">
                </colgroup>
                <tbody>
                    <tr>
                        <th>Case ID:</th>
                        <td colspan="3">{{ $ticket->id }}</td>
                    </tr>
                    <tr>
                        <th>Status:</th>
                        <td colspan="3">{{ $ticket->status_id }}</td>
                    </tr>
                    <tr>
                        <th>Category:</th>
                        <td colspan="3">{{ $ticket->category->title }}</td>
                    </tr>
                    <tr>
                        <th>Vessel:</th>
                        <td colspan="3">{{ $ticket->vessel->title }}</td>
                    </tr>
                    <tr>
                        <th>Service Lines:</th>
                        <td colspan="3">{{ $ticket->serviceLine->title }}</td>
                    </tr>
                    <tr>
                        <th>Support Engineer ID:</th>
                        <td colspan="3">{{ $ticket->supportEngineer->name }}</td>
                    </tr>
                    <tr>
                        <th>SLA:</th>
                        <td colspan="3">{{ $ticket->sla_dt }}</td>
                    </tr>
                    <tr>
                        <th>Working Time:</th>
                        <td colspan="3">{{ $ticket->working_time }}</td>
                    </tr>
                    <tr>
                        <th>Descriptions:</th>
                        <td colspan="3">{{ $ticket->descriptions }}</td>
                    </tr>
                    <tr>
                        <th>created At:</th>
                        <td>{{ $ticket->ccreated_at }}</td>
                        <th>Created By:</th>
                        <td>{{ $ticket->created_by }}</td>
                    </tr>
                    <tr>
                        <th>Updated At:</th>
                        <td>{{ $ticket->updated_at }}</td>
                        <th>Updated By:</th>
                        <td>{{ $ticket->updated_by }}</td>
                    </tr>
                    <tr>
                        <th>Deleted At:</th>
                        <td>{{ $ticket->deleted_at }}</td>
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
