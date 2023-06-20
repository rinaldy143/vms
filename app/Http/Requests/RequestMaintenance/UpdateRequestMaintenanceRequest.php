<?php

namespace App\Http\Requests\RequestMaintenance;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequestMaintenanceRequest extends FormRequest
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
            'analysist'  => 'required|string|max:255',
            'aprove_by'  => 'string|max:255',
            // 'wo_id'  => 'string|max:255',
        ];
    }
}
