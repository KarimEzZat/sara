<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
            'title' => 'required',
            'description' => 'required|min:20|max:1000',
            'image' => 'required|mimes:jpg,jpeg,png,svg,gif|dimensions:width=470,height=600',
            'name' => 'required',
            'city' => 'required',
            'experience_year' => 'required|numeric|min:1|max:30',
            'freelance' => 'required',
            'address' => 'required',
        ];
    }
}
