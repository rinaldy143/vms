<?php

namespace App\Http\Requests\RequestMaintenance;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequestMaintenanceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // 'name' => 'required|string|max:255',
            'report_by'  => 'string|max:255',
            'report_problem'  => 'required|string|max:255',
            // 'dampak'  => 'required|string|max:255',
            // 'maintenance_date'  => '|string|max:255',
            'vehicle_id'  => 'required|string|max:255',
            // 'trailer_id'  => 'string|max:255',
            'km_Unit'  => 'required|string|max:255',
            'hm_Unit'  => 'nullable|string|max:255',
            // 'wo_id'  => 'string|max:255',
            'unit_condition'  => 'required|string|max:255',
            // 'priority'  => 'required|string|max:255',
            // 'activity_maintenance'  => 'required|string|max:255',
            // 'C1'  => 'nullable|numeric|max:255',
            'C2'  => 'nullable|numeric|max:255',
            'C3'  => 'nullable|numeric|max:255',
            // 'C4'  => 'nullable|numeric|max:255',
            // 'preferensi'  => 'nullable|string|max:255',
            // 'vektor'  => 'nullable|string|max:255',
            // 'analysist'  => 'string|max:255',
            // 'aprove_by'  => 'string|max:255',
        ];
    }
}
