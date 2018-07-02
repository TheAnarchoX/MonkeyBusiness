<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateActivity extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return \Auth::user()->can('update', \App\Activity::class);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
//        dd($this);
        return [
            'title' => ['required', 'min:3', 'max:255', Rule::unique('activities')->ignore($this->title, 'title')],
            'description' => 'required|min:3|max:2047',
            'target' => 'required',
            'event_date' => 'required|date|after_or_equal:today',
            'activity_img' => 'required|image',
            'location' => 'required'
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
            'target.required' => 'Voer een doelgroep in',
            'event_date.required' => 'Voer een datum in',
            'event_date.date' => 'Geen geldige datum',
            'event_date.after_or_equal' => 'Het evenement mag niet in het verleden plaats vinden',
            'activity_img.required' => 'Kies een afbeelding voor de activiteit',
            'activity_img.image' => 'Het ingevoerde bestand is geen ondersteunde afbeelding',
            'location.required' => 'Kies een locatie'
        ];
    }
}
