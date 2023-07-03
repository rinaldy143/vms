<?php

namespace App\Http\Requests\WeightProduct;

use Illuminate\Foundation\Http\FormRequest;

class StoreWeightProductRequest extends FormRequest
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
            'kriteria' => 'required|string|max:255',
            'nilai_bobot' => 'required',
            'prioritas' => 'nullable',
            'bobot' => 'nullable',
        ];
    }
}
