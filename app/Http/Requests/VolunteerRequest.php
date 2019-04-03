<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VolunteerRequest extends FormRequest
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
            'province' => 'bail|required|exists:geo_provinces,id|integer',
            'city' => 'bail|required|exists:geo_cities,id|integer',
            'telephone' => 'bail|required|string|size:9',            
        ];
    }
}
