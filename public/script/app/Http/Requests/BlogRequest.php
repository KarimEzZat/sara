<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'title' => 'required|unique:blogs',
            'image' => 'required|mimes:jpg,png,jpeg,gif,svg,jfif|dimensions:min_width=704,min_height=460',
            'description' => 'required|min:20|max:1000',
        ];
    }
}
