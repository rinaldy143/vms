<?php

namespace App\Http\Requests\WorkOrder;

use Illuminate\Foundation\Http\FormRequest;

class UpdateWorkOrderRequest extends FormRequest
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
            'jobsite_location'  => 'string|max:255',
            'damage_component'  => 'string|max:255',
            'damaged_level'  => 'string|max:255',
            // 'sparepart_id'  => 'string|max:255',
            // 'jumlah.*' => 'integer',
            'analysist'  => 'string|max:255',
            'photo'  => 'mimes:png,jpg,svg',
            ];
    }
}
