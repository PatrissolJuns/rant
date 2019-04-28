<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Rest1CreateRequest extends FormRequest
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
            //
            'nom'     => 'required|max:255|unique:rest1',
            'immeuble'    => 'required|max:255',
            'rue'    => 'required|max:255',
            'quartier'    => 'required|max:255',
            'cuisine'    => 'required|max:255',
            'image'    => 'required|max:255',
        ];
    }
}
