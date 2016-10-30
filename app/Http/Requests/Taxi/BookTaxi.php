<?php

namespace Omicron\Http\Requests\Taxi;

use Illuminate\Foundation\Http\FormRequest;

class BookTaxi extends FormRequest
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
            'policyNumber' => 'required',
            'mobileNumber' => 'required',
            'serviceProvider' => 'required'
        ];
    }
}
