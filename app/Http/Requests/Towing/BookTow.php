<?php
/**
 * Created by PhpStorm.
 * User: bhanuka
 * Date: 10/30/16
 * Time: 1:18 PM
 */

namespace Omicron\Http\Requests\Towing;


use Illuminate\Foundation\Http\FormRequest;

class BookTow extends FormRequest
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