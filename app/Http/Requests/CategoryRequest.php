<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {

        $rules = [
            'name' => 'required|min:3|max:255',
        ];

        if($this->route()->getActionMethod() === 'store'){
            $rules['image']='required|image|mimes:jpg,jpeg,png|max:5024';
        }
        return $rules;

    }
}
