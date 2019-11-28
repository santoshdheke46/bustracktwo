<?php

namespace SsGroup\BusTracking\App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class DriverRequest extends FormRequest
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
            'full_name' => 'required|max:255',
            'phone_no' => ['max:255','required','unique:drivers,phone_no','regex:/' . config("bus.validation.mobile_no.regex") . '/'],
            'capacity' => 'max:255'
        ];
    }

    public function messages()
    {
        return [
            'full_name.required' => 'Full name field is required.',
            'full_name.max' => 'Max length of full name is 255.',
            'phone_no.max' => 'Max length of bus phone number is 255.',
            'phone_no.required' => 'Bus number field is required.',
            'phone_no.regex' => config("bus.validation.mobile_no.regex_message"),
            'capacity.max' => 'Max capacity of bus is 500.',
        ];
    }
}
