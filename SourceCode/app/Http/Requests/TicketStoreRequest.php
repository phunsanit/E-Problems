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
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id' => 'required|integer|exists:tickets,id',
            'status_id' => 'required|integer',
            'category_id' => 'required|integer',
            'vessel_id' => 'required|integer',
            'service_line_id' => 'required|integer',
            'support_engineer_id' => 'required|integer',
            'sla_dt' => 'required|date',
            'working_time' => 'nullable|integer',
            'descriptions' => 'required|string',
            'created_by' => 'required|integer',
            'updated_by' => 'nullable|integer',
            'deleted_by' => 'nullable|integer',
        ];
    }
}
