@extends('tickets.layout')

@section('content')
<div class="card mt-5">
    <h2 class="card-header">Edit Ticket</h2>
    <div class="card-body">

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary btn-sm" href="{{ url('tickets') }}"><i class="fa fa-arrow-left"></i> Back</a>
        </div>

        <form action="{{ url('tickets.update',$ticket->id) }}" method="POST">
            @csrf
            @method('PUT')

            @include('tickets.from')

            <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Update</button>
        </form>

    </div>
</div>
@endsection