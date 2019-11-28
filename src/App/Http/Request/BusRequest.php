<?php

namespace SsGroup\BusTracking\App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class BusRequest extends FormRequest
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
        $rules = [
            'name' => 'max:255',
            'number' => 'max:255|required',
            'capacity' => 'max:255|'
        ];

        if (request('capacity')){
            $rules['capacity'] = 'numeric|max:500';
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'name.max' => 'Max length of name is 255.',
            'number.max' => 'Max length of bus number is 255.',
            'number.required' => 'Bus number field is required.',
            'capacity.max' => 'Max capacity of bus is 500.',
        ];
    }
}
