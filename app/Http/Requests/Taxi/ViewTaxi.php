<?php

namespace Omicron\Http\Requests\Taxi;

use Illuminate\Foundation\Http\FormRequest;

class ViewTaxi extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // TODO - connect with the server and varify the user for booking
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [];
    }
}
