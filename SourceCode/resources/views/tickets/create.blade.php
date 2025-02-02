@extends('tickets.layout')
@section('content')
<div class="card mt-5">
    <h2 class="card-header"><i class="fa-solid fa-plus"></i> create Ticket</h2>
    <div class="card-body">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary btn-sm" href="{{ url('tickets') }}"><i class="fa fa-arrow-left"></i> Back</a>
        </div>
        <form action="{{ route('tickets.store') }}" autocomplete="off" method="POST">
            @csrf
            @include('tickets.from', ['item' => $item])
            <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
        </form>
    </div>
</div>
@endsection
