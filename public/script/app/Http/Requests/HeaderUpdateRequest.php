<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HeaderUpdateRequest extends FormRequest
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
            //
            'hero_title' => 'required',
            'animated_text' => 'required',
            'image' => 'mimes:jpg,png,jpeg,gif,svg,jfif|dimensions:width=150,height=150',
            'cv' => 'mimes:pdf,html,txt|max:10000',
        ];
    }
}
