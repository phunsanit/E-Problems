@if(session('error'))
<p class="aze bdk">session('error') }}</p>
@endif


<div class="mb-4">
    <label for="inputStatusId" class="block text-sm font-medium text-gray-700"><strong>Status ID:</strong></label>
    <select-from-json
    class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
    id="inputStatusId"
    json="{{ url('assets/options/status_id.json') }}"
    name="status_id"
    selected="{{ old('status_id', $item['status_id']) }}"
    />
    @error('status_id')
    <div class="text-sm text-red-600">{{ $message }}</div>
    @enderror
</div>
<div class="mb-4">
    <label for="inputCategoryId" class="block text-sm font-medium text-gray-700"><strong>Category ID:</strong></label>
    <input
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('category_id') border-red-500 @enderror"
        id="inputCategoryId"
        name="category_id"
        placeholder="Category ID"
        type="number"
        value="{{ old('category_id', $item['category_id']) }}"
        >
    @error('category_id')
    <div class="text-sm text-red-600">{{ $message }}</div>
    @enderror
</div>
<div class="mb-4">
    <label for="inputVesselId" class="block text-sm font-medium text-gray-700"><strong>Vessel ID:</strong></label>
    <input
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('vessel_id') border-red-500 @enderror"
        id="inputVesselId"
        name="vessel_id"
        placeholder="Vessel ID"
        type="number"
        value="{{ old('vessel_id', $item['vessel_id']) }}"
        >
    @error('vessel_id')
    <div class="text-sm text-red-600">{{ $message }}</div>
    @enderror
</div>
<div class="mb-4">
    <label for="inputServiceLineId" class="block text-sm font-medium text-gray-700"><strong>Service Lines ID:</strong></label>
    <input
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('service_line_id') border-red-500 @enderror"
        id="inputServiceLineId"
        name="service_line_id"
        placeholder="Service Lines ID"
        type="number"
        value="{{ old('service_line_id', $item['service_line_id']) }}"
        >
    @error('service_line_id')
    <div class="text-sm text-red-600">{{ $message }}</div>
    @enderror
</div>
<div class="mb-4">
    <label for="inputSupportEngineerId" class="block text-sm font-medium text-gray-700"><strong>Support Engineer ID:</strong></label>
    <input
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('support_engineer_id') border-red-500 @enderror"
        id="inputSupportEngineerId"
        name="support_engineer_id"
        placeholder="Support Engineer ID"
        type="number"
        value="{{ old('support_engineer_id', $item['support_engineer_id']) }}"
        >
    @error('support_engineer_id')
    <div class="text-sm text-red-600">{{ $message }}</div>
    @enderror
</div>
<div class="mb-4">
    <label for="inputSlaDt" class="block text-sm font-medium text-gray-700"><strong>SLA Date and Time:</strong></label>
    <input
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('sla_dt') border-red-500 @enderror"
        id="inputSlaDt"
        name="sla_dt"
        placeholder="SLA Date and Time"
        type="datetime-local"
        value="{{ old('sla_dt', $item['sla_dt']) }}"
        >
    @error('sla_dt')
    <div class="text-sm text-red-600">{{ $message }}</div>
    @enderror
</div>
<div class="mb-4">
    <label for="inputWorkingTime" class="block text-sm font-medium text-gray-700"><strong>Working Time:</strong></label>
    <input
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('working_time') border-red-500 @enderror"
        id="inputWorkingTime"
        name="working_time"
        placeholder="Working Time"
        type="number"
        value="{{ old('working_time', $item['working_time']) }}"
        >
    @error('working_time')
    <div class="text-sm text-red-600">{{ $message }}</div>
    @enderror
</div>
<div class="mb-4">
    <label for="inputDescriptions" class="block text-sm font-medium text-gray-700"><strong>Descriptions:</strong></label>
    <textarea
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('descriptions') border-red-500 @enderror"
        id="inputDescriptions"
        name="descriptions"
        placeholder="Descriptions"
        style="height:150px"
        >{{ old('descriptions', $item['descriptions']) }}</textarea>
    @error('descriptions')
    <div class="text-sm text-red-600">{{ $message }}</div>
    @enderror
</div>
