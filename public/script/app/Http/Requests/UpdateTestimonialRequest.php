<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTestimonialRequest extends FormRequest
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
            'name' => 'required',
            'image' => 'mimes:jpg,png,jpeg,gif,svg,jfif|dimensions:max_width=250,max_height=250,min_width:150,min_height:150',
            'position' => 'required',
            'review' => 'required|min:20|max:1000',
        ];
    }
}
