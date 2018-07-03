<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewNews extends FormRequest
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
            'title' => 'required|min:3|max:255|unique:activities',
            'body' => 'required|min:3|max:2047',
            'publication_date' => 'required|date|after_or_equal:today',
            'news_img' => 'required|image',
        ];
    }

    public function messages() {
        return [
            'title.required' => 'Voer een titel in',
            'title.min' => 'Titel moet minimaal 3 tekens lang zijn',
            'title.max' => 'Titel moet maximaal 255 tekens zijn',
            'title.unique' => 'Titel komt al voor in het systeem',
            'body.required' => 'Voer een Inhoud in',
            'body.min' => 'Inhoud moet minimaal 3 tekens lang zijn',
            'body.max' => 'Inhoud moet maximaal 2047 tekens lang zijn',
            'publication_date.required' => 'Voer een datum in',
            'publication_date.date' => 'Geen geldige datum',
            'publication_date.after_or_equal' => 'Het nieuwsbericht mag niet in het verleden worden gepubliceerd',
            'news_img.required' => 'Kies een afbeelding voor het nieuwsbericht',
            'news_img.image' => 'Het ingevoerde bestand is geen ondersteunde afbeelding',
        ];
    }
}
