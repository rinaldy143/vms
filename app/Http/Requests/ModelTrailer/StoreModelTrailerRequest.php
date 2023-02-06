<?php

namespace App\Http\Requests\ModelTrailer;

use Illuminate\Foundation\Http\FormRequest;

class StoreModelTrailerRequest extends FormRequest
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
            'trailer_model' => 'required|string|max:255',
        ];
    }
}
