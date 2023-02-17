<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorksRequest extends FormRequest
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
            'title' => 'required|unique:works',
            'category_id' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg,gif,svg,jfif|dimensions:min_width=710,min_height=535',
            'description' => 'required|min:20|max:1000',
        ];
    }
}
