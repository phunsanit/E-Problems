<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TicketStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'category_id' => 'required|integer',
            'created_by' => 'required|integer',
            'deleted_by' => 'nullable|integer',
            'descriptions' => 'required|string',
            'service_line_id' => 'required|integer',
            'sla_dt' => 'required|date',
            'status_id' => 'required|integer',
            'support_engineer_id' => 'required|integer',
            'updated_by' => 'nullable|integer',
            'vessel_id' => 'required|integer',
            'working_time' => 'required|integer',
        ];
    }
}
