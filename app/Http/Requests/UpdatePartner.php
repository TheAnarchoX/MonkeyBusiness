<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePartner extends FormRequest
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
            'name' => ['required','min:3', 'max:255',Rule::unique('partners')->ignore($this->name, 'name')],
            'description' => 'required|min:3|max:2047',
            'email' => 'required|email',
            'phone_number' => 'required',
            'website' => 'required'
        ];
    }

    public function messages() {
        return [
            'name.required' => 'Voer een Naam in',
            'name.min' => 'Naam moet minimaal 3 tekens lang zijn',
            'name.max' => 'Naam moet maximaal 255 tekens zijn',
            'name.unique' => 'Naam komt al voor in het systeem',
            'description.required' => 'Voer een Beschrijving in',
            'description.min' => 'Beschrijving moet minimaal 3 tekens lang zijn',
            'description.max' => 'Beschrijving moet maximaal 2047 tekens lang zijn',
            'email.required' => 'Voer een email in',
            'email.email' => 'Voer een geldig email in',
            'phone_number.required' => 'Voer een telefoonnummer in',
            'website.required' => 'Voer een URL (Website) in',
        ];
    }
}
