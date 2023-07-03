<?php

namespace App\Http\Requests\WeightProduct;

use Illuminate\Foundation\Http\FormRequest;

class UpdateWeightProductRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'prioritas' => 'nullable',
            'bobot' => 'nullable',
            'prioritas' => 'nullable',
            'nilai_bobot' => 'nullable',
        ];
    }
}
