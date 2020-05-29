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
            'park_name'=> 'required:parks_gardens',
            'image'=> 'parks_gardens',
            'price'=> 'required|:parks_gardens',
            'description'=>'required|:parks_gardens',
            'availability'=>'required|:parks_gardens',
            'land_area'=>'required|:parks_gardens',
            'toilets'=>'required|:parks_gardens',
            'trees'=>'required|:parks_gardens',
            'latitude'=>'required|:parks_gardens',
            'longitude'=>'required|:parks_gardens'  
             

                 
        ];
    }
}
