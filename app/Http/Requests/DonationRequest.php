<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DonationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {

        
        return $rules=[
            'patient_name' => 'required|string|max:50',
            'email' => 'required|email|max:255',
            'bages_num' => 'required|numeric',
            'patients_phone' => 'required|numeric|unique:donation_request,patients_phone', 
            'bloode_type' => 'required|unique:donation_request,bloode_type',
            'hospital_name' => 'required|string',
            'patient_age' => 'required|numeric',
            'address' => 'required|string|max:255',
                ];
    }
    public function messages(): array
    {
        return  $Messages=[
                 'patient_name.required' => 'Please enter your name.',
                 'bages_num.required' => 'Please enter your blood type.',
                 'address.required' => 'Please enter your address.',
                 'patients_phone.required' => 'Please enter your phone number.',
                 'email.required' => 'Please enter your email address.',
                 'bloode_type' => 'Please select a valid blood type.', 
                 'hospital_name.required' => 'Please enter the hospital name.',
                 'patient_age.required' => 'Please enter your age.',
             'email.required' => 'Please enter your email address.',
            
              ];
    }
}
