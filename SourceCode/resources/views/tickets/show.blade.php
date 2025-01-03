@extends('tickets.layout')

@section('content')
<div class="card mt-5">
    <h2 class="card-header"><i class="fa-regular fa-file"></i> Show Ticket: {{ $ticket->id }}</h2>
    <div class="card-body">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary btn-sm" href="{{ url('tickets') }}"><i class="fa fa-arrow-left"></i> Back</a>
        </div>
        <div class="overflow-x-auto">
            <table class="table-bordered w-full border">
                <colgroup>
                    <col class="w-2/10 sm:full">
                    <col class="w-3/10 sm:full">
                    <col class="w-2/10 sm:full">
                    <col class="w-3/10 sm:full">
                </colgroup>
                <thead>
                    <tr>
                        <th>Case ID:</th>
                        <td colspan="3">{{ $ticket->id }}</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Status:</th>
                        <td colspan="3">{{ $ticket->status }}</td>
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
                        <th>Created At:</th>
                        <td>{{ $ticket->created_at }}
                            to-locale-date-string date="{{ $ticket->created_at }}"
                        </td>
                        <th>Created By:</th>
                        <td>{{ $ticket->creator->name }}</td>
                    </tr>

                    @if($ticket->updated_at)
                    <tr>
                        <th>Updated At:</th>
                        <td>{{ $ticket->updated_at }}</td>
                        <th>Updated By:</th>
                        <td>{{ $ticket->updater->name }}</td>
                    </tr>
                    @endif

                    @if($ticket->deleted_at)
                    <tr>
                        <th>Deleted At:</th>
                        <td>{{ $ticket->deleted_at }}</td>
                        <th>Deleted By:</th>
                        <td>{{ $ticket->deletor->name }}</td>
                    </tr>
                    @endif

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('contentScript')
<script type="module">
</script>
@endsection
