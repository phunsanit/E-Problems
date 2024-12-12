@extends('tickets.layout')

@section('content')

<div class="card mt-5">
    <h2 class="card-header">ticket</h2>
    <div class="card-body">

        @if(session('success'))
            <div class="alert alert-success" role="alert">{{ session('success') }}</div>
        @endif

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-success btn-sm" href="{{ route('tickets.create') }}"><i class="fa fa-plus"></i> Create New Ticket</a>
        </div>

        <table class="table table-bordered table-striped mt-4">
            <thead>
                <tr>
                    <th width="80px">No</th>
                    <th>Case ID</th>
                    <th>Status</th>
                    <th>Category</th>
                    <th>Vessel</th>
                    <th>Service Lines</th>
                    <th>Support Engineer ID</th>
                    <th>SLA</th>
                    <th>Working Time</th>
                    <th width="250px">Action</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($tickets as $ticket)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $ticket->case_id }}</td>
                        <td>{{ $ticket->status }}</td>
                        <td>{{ $ticket->category }}</td>
                        <td>{{ $ticket->vessel }}</td>
                        <td>{{ $ticket->service_lines }}</td>
                        <td>{{ $ticket->support_engineer_id }}</td>
                        <td>{{ $ticket->sla }}</td>
                        <td>{{ $ticket->working_time }}</td>
                        <td>
                            <form action="{{ route('tickets.destroy',$ticket->id) }}" method="POST">
                                <a class="btn btn-info btn-sm" href="{{ route('tickets.show',$ticket->id) }}"><i class="fa-solid fa-list"></i> Show</a>
                                <a class="btn btn-primary btn-sm" href="{{ route('tickets.edit',$ticket->id) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">There are no data.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {!! $tickets->links() !!}

    </div>
</div>

@endsection