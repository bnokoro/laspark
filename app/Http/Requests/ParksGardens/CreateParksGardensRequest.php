<?php

namespace App\Http\Requests\ParksGardens;

use Illuminate\Foundation\Http\FormRequest;

class CreateParksGardensRequest extends FormRequest
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
            'price' => 'required|unique:parks_gardens',
            'description' => 'required|unique:parks_gardens',
            'availability' => 'required|boolean:parks_gardens',
            'status' => 'required|unique:parks_gardens'
        ];
    }
}
