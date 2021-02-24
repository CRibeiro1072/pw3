<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceRequest extends FormRequest
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
            'customer_id' => 'exists:customers,id',
            'expert_id' => 'exists:experts,id',
            'device_id' => 'exists:devices,id',
            'brand_id' => 'exists:brands,id',
            'template_id' => 'exists:templates,id',
            'serial' => 'required',
            'claimedDefect' => 'required',
            'technicalReport' => 'string',
            'servicePrice' => 'numeric',
            'dateTechnicalReport' => 'date'
        ];
    }
}
