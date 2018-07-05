<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewPhoto extends FormRequest
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
            'title' => 'required|min:3|max:255|unique:photos',
            'description' => 'required|min:3|max:2047',
            'img' => 'required|image',
        ];
    }

    public function messages() {
        return [
            'title.required' => 'Voer een titel in',
            'title.min' => 'Titel moet minimaal 3 tekens lang zijn',
            'title.max' => 'Titel moet maximaal 255 tekens zijn',
            'title.unique' => 'Titel komt al voor in het systeem',
            'description.required' => 'Voer een beschrijving in',
            'description.min' => 'Beschrijving moet minimaal 3 tekens lang zijn',
            'description.max' => 'Beschrijving moet maximaal 2047 tekens lang zijn',
            'img.required' => 'Kies een  afbeelding',
            'img.image' => 'Het ingevoerde bestand is geen ondersteunde afbeelding',
        ];
    }
}
