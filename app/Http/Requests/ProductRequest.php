<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $rules = [
            'name' => 'required|min:3',
            'description' => 'required|min:50',
            'quantity'  => 'required|numeric',
            'price' => 'required|numeric',
            'category_id' => 'required|numeric',
            // 'color' => 'nullable',
            // 'size' => 'nullable',
            // 'status' => 'required|nullable',

        ];
        if($this->route()->getActionMethod() === 'store'){
            $rules['image']='required|image|mimes:jpg,jpeg,png|max:5024';
        }
        return $rules;

    }
}