<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProductValidation extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'country'=>'required',
            'category'=>'required',
            'color'=>'required',
            'price'=>'required|numeric',
            'photo_file'=>'nullable|file|image',
            'availability'=>'required'
        ];
    }
}
