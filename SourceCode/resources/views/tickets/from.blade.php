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
    <select-from-json
    class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
    id="inputCategoryId"
    json="{{ url('assets/options/category_id.json') }}"
    name="category_id"
    selected="{{ old('category_id', $item['category_id']) }}"
    />
    @error('category_id')
    <div class="text-sm text-red-600">{{ $message }}</div>
    @enderror
</div>
<div class="mb-4">
    <label for="inputVesselId" class="block text-sm font-medium text-gray-700"><strong>Vessel ID:</strong></label>
    <select-from-json
    class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
    id="inputVesselId"
    json="{{ url('assets/options/vessel_id.json') }}"
    name="vessel_id"
    selected="{{ old('vessel_id', $item['vessel_id']) }}"
    />
    @error('vessel_id')
    <div class="text-sm text-red-600">{{ $message }}</div>
    @enderror
</div>
<div class="mb-4">
    <label for="inputServiceLineId" class="block text-sm font-medium text-gray-700"><strong>Service Lines ID:</strong></label>
    <select-from-json
    class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
    id="inputServiceLineId"
    json="{{ url('assets/options/service_line_id.json') }}"
    name="service_line_id"
    selected="{{ old('service_line_id', $item['service_line_id']) }}"
    />
    @error('service_line_id')
    <div class="text-sm text-red-600">{{ $message }}</div>
    @enderror
</div>
<div class="mb-4">
    <label for="inputSupportEngineerId" class="block text-sm font-medium text-gray-700"><strong>Support Engineer ID:</strong></label>
    <select-from-json
    class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
    id="inputSupportEngineerId"
    json="{{ url('assets/options/team_support_id.json') }}"
    name="support_engineer_id"
    selected="{{ old('support_engineer_id', $item['support_engineer_id']) }}"
    />
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
