<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
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
            //
            'fullName' => 'required|string|max:191',
            'address' => 'required|string|max:191',
            'district' => 'required|string',
            'state' => 'required|string|max:2',
            'phone' => 'required|numeric',
            'cellPhone' => 'required|numeric',
            'email' => 'unique:customers,email|required|email',
        ];
    }
}
