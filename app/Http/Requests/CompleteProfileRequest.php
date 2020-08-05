<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompleteProfileRequest extends FormRequest
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
            'emp_name' => ['required', 'string', 'max:255'],
            'emp_address' => ['required', 'string', 'max:255'],
            'emp_email' => ['required', 'string', 'email', 'max:255',],

            'nok_first_name' => ['required', 'string', 'max:255'],
            'nok_last_name' => ['required', 'string', 'max:255'],
            'nok_mobile_number' => ['required', 'string', 'max:12', 'min:10'],
            'nok_address' => ['required', 'string', 'max:255'],
            'nok_email' => ['required', 'string', 'email', 'max:255'],
        ];
    }
}
