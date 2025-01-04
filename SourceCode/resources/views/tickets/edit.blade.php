@extends('tickets.layout')
@section('content')
<div class="card mt-5">
    <h2 class="card-header"><i class="fa-regular fa-pen-to-square"></i> Edit Ticket</h2>
    <div class="card-body">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary btn-sm" href="{{ url('tickets') }}"><i class="fa fa-arrow-left"></i> Back</a>
        </div>
        <form action="{{ route('tickets.update',$item->id) }}" autocomplete="off" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $item->id }}">
            @include('tickets.from', ['ticket' => $item])
            <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Update</button>
        </form>
    </div>
</div>
@endsection
