<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuotesRequest extends FormRequest
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
            //
            $rules = [
                ' name' => 'required|min:3',
                ' description' => 'required',


             ];

             if($this->route()->getActionMethod() === 'store'){
                 $rules['image']='required|image|mimes:jpg,jpeg,png|max:5024';
             }

             return $rules;
    }
}
