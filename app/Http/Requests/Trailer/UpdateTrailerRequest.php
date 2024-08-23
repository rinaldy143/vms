<?php

namespace App\Http\Requests\Trailer;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTrailerRequest extends FormRequest
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
            'code_trailer' => 'required|string|max:255',
            'vehicle_connected' => 'required',
            // 'photo',
            'monthly_maintenance' => 'required',
            // 'last_maintenance',
            'model_trailer_id' => 'required',
            'type_trailer_id' => 'required',        ];
    }
}
