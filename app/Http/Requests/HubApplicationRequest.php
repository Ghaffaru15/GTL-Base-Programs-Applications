<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HubApplicationRequest extends FormRequest
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
            'hub_name'=> 'required',
            'project_lead_name' => 'required',
            'project_lead_phone_number' => 'required',
            'project_lead_email' => 'required',
            'logo' => ['required','image','mimes:png'],
        ];
    }
}
