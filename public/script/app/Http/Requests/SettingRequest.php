<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
            'logo' => 'required',
            'favicon' => 'mimes:jpg,png,jpeg,gif,svg,jfif,ico|dimensions:width=16,height=16',
            'site_name' => 'required',
            'skill_title' => 'required',
            'skill_description' => 'required|min:20|max:1000',
            'service_main_title' => 'required',
            'service_up_title' => 'required',
            'hire_title' => 'required',
            'contact_title' => 'required',
            'contact_image' => 'mimes:jpg,png,jpeg,gif,svg,jfif,ico|dimensions:width=285,height=480',
            'phone' => 'required',
            'email' => 'required|email',
            'web_site' => 'required'
        ];
    }
}
