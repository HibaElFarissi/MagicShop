<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    public function rules(): array
    {
        $rules = [
            'name' => 'required|min:3',
            'Title_Globale' => 'required',
            'description_Globale' => 'required',
            'Title1' => 'required',
            'description1' => 'required',
            'Mini_Title1' => 'required',
            'Slug1' => 'required',
            'Mini_Title2' => 'required',
            'Slug2' => 'required',
            'Title2' => 'required',
            'description2' => 'required',
            'TitleQuotes' => 'required',
            'SlugQuotes' => 'required',
            'TitleCategory' => 'required',
            'SlugCategory' => 'required',
            'TitleFaq' => 'required',
            'SlugFaq' => 'required',

        ];
        if($this->route()->getActionMethod() === 'store'){
            $rules['image1']='required|image|mimes:jpg,jpeg,png|max:5024';
            $rules['image2']='required|image|mimes:jpg,jpeg,png|max:5024';
            // $rules['image3']='required|image|mimes:jpg,jpeg,png|max:5024';
        }
        return $rules;

    }
}
