<div>
    <h1>TicketForm</h1>
    <TicketForm></TicketForm>
</div>

<div class="mb-4">
    <label for="inputStatusId" class="block text-sm font-medium text-gray-700"><strong>Status ID:</strong></label>
    <input
        type="number"
        name="status_id"
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('status_id') border-red-500 @enderror"
        id="inputStatusId"
        placeholder="Status ID">
    @error('status_id')
        <div class="text-sm text-red-600">{{ $message }}</div>
    @enderror
</div>

<div class="mb-4">
    <label for="inputCategoryId" class="block text-sm font-medium text-gray-700"><strong>Category ID:</strong></label>
    <input
        type="number"
        name="category_id"
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('category_id') border-red-500 @enderror"
        id="inputCategoryId"
        placeholder="Category ID">
    @error('category_id')
        <div class="text-sm text-red-600">{{ $message }}</div>
    @enderror
</div>

<div class="mb-4">
    <label for="inputVesselId" class="block text-sm font-medium text-gray-700"><strong>Vessel ID:</strong></label>
    <input
        type="number"
        name="vessel_id"
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('vessel_id') border-red-500 @enderror"
        id="inputVesselId"
        placeholder="Vessel ID">
    @error('vessel_id')
        <div class="text-sm text-red-600">{{ $message }}</div>
    @enderror
</div>

<div class="mb-4">
    <label for="inputServiceLineId" class="block text-sm font-medium text-gray-700"><strong>Service Lines ID:</strong></label>
    <input
        type="number"
        name="service_line_id"
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('service_line_id') border-red-500 @enderror"
        id="inputServiceLineId"
        placeholder="Service Lines ID">
    @error('service_line_id')
        <div class="text-sm text-red-600">{{ $message }}</div>
    @enderror
</div>

<div class="mb-4">
    <label for="inputSupportEngineerId" class="block text-sm font-medium text-gray-700"><strong>Support Engineer ID:</strong></label>
    <input
        type="number"
        name="support_engineer_id"
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('support_engineer_id') border-red-500 @enderror"
        id="inputSupportEngineerId"
        placeholder="Support Engineer ID">
    @error('support_engineer_id')
        <div class="text-sm text-red-600">{{ $message }}</div>
    @enderror
</div>

<div class="mb-4">
    <label for="inputSlaDt" class="block text-sm font-medium text-gray-700"><strong>SLA Date and Time:</strong></label>
    <input
        type="datetime-local"
        name="sla_dt"
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('sla_dt') border-red-500 @enderror"
        id="inputSlaDt"
        placeholder="SLA Date and Time">
    @error('sla_dt')
        <div class="text-sm text-red-600">{{ $message }}</div>
    @enderror
</div>

<div class="mb-4">
    <label for="inputWorkingTime" class="block text-sm font-medium text-gray-700"><strong>Working Time:</strong></label>
    <input
        type="number"
        name="working_time"
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('working_time') border-red-500 @enderror"
        id="inputWorkingTime"
        placeholder="Working Time">
    @error('working_time')
        <div class="text-sm text-red-600">{{ $message }}</div>
    @enderror
</div>

<div class="mb-4">
    <label for="inputDescriptions" class="block text-sm font-medium text-gray-700"><strong>Descriptions:</strong></label>
    <textarea
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('descriptions') border-red-500 @enderror"
        style="height:150px"
        name="descriptions"
        id="inputDescriptions"
        placeholder="Descriptions"></textarea>
    @error('descriptions')
        <div class="text-sm text-red-600">{{ $message }}</div>
    @enderror
</div>
