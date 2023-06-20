<?php

namespace App\Http\Requests\WorkOrder;

use Illuminate\Foundation\Http\FormRequest;

class StoreWorkOrderRequest extends FormRequest
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
            // 'req_sparepart'  => 'string|max:255',
            'rm_id'  => 'string|max:255',
            'user_id'  => '',
            'assign_by'  => 'string|max:255',
            // 'jobsite_location'  => 'string|max:255',
            // 'damage_component'  => 'string|max:255',
            // 'damaged_level'  => 'string|max:255',
            // 'analysist'  => 'string|max:255',
        ];
    }
}
