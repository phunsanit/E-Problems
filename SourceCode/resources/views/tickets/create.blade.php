@extends('tickets.layout')

@section('content')

<div class="card mt-5">
    <h2 class="card-header">Add New Ticket</h2>
    <div class="card-body">

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary btn-sm" href="{{ url('tickets.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
        </div>

        <form action="{{ url('tickets.store') }}" method="POST">
            @csrf

            @include('tickets.from')

            <div class="mb-3">
                <label for="inputStatusId" class="form-label"><strong>Status ID:</strong></label>
                <input
                    type="number"
                    name="status_id"
                    class="form-control @error('status_id') is-invalid @enderror"
                    id="inputStatusId"
                    placeholder="Status ID">
                @error('status_id')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputCategoryId" class="form-label"><strong>Category ID:</strong></label>
                <input
                    type="number"
                    name="category_id"
                    class="form-control @error('category_id') is-invalid @enderror"
                    id="inputCategoryId"
                    placeholder="Category ID">
                @error('category_id')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputVesselId" class="form-label"><strong>Vessel ID:</strong></label>
                <input
                    type="number"
                    name="vessel_id"
                    class="form-control @error('vessel_id') is-invalid @enderror"
                    id="inputVesselId"
                    placeholder="Vessel ID">
                @error('vessel_id')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputServiceLinesId" class="form-label"><strong>Service Lines ID:</strong></label>
                <input
                    type="number"
                    name="service_line_id"
                    class="form-control @error('service_line_id') is-invalid @enderror"
                    id="inputServiceLineId"
                    placeholder="Service Lines ID">
                @error('service_line_id')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputSupportEngineerId" class="form-label"><strong>Support Engineer ID:</strong></label>
                <input
                    type="number"
                    name="support_engineer_id"
                    class="form-control @error('support_engineer_id') is-invalid @enderror"
                    id="inputSupportEngineerId"
                    placeholder="Support Engineer ID">
                @error('support_engineer_id')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputSlaDt" class="form-label"><strong>SLA Date and Time:</strong></label>
                <input
                    type="datetime-local"
                    name="sla_dt"
                    class="form-control @error('sla_dt') is-invalid @enderror"
                    id="inputSlaDt"
                    placeholder="SLA Date and Time">
                @error('sla_dt')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputWorkingTime" class="form-label"><strong>Working Time:</strong></label>
                <input
                    type="number"
                    name="working_time"
                    class="form-control @error('working_time') is-invalid @enderror"
                    id="inputWorkingTime"
                    placeholder="Working Time">
                @error('working_time')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputDescriptions" class="form-label"><strong>Descriptions:</strong></label>
                <textarea
                    class="form-control @error('descriptions') is-invalid @enderror"
                    style="height:150px"
                    name="descriptions"
                    id="inputDescriptions"
                    placeholder="Descriptions"></textarea>
                @error('descriptions')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
        </form>

    </div>
</div>
@endsection
