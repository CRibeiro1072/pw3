<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreExpertRequest extends FormRequest
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
            'function' => 'required|max:191',
            'fullName' => 'required|max:191',
            'phone' => 'required',
            'cellPhone' => 'required',
            'email' => 'unique:experts,email|required|email',
            'percent' => 'required|numeric',
        ];
    }
}
