<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SkillRequest extends FormRequest
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

            'skills' => ['required', 'array', 'min:1'],
            'skills.*' => ['required', 'distinct', 'unique:skills,skill'],
            'percents' => 'required|array|min:1',
            'percents.*' => 'required|numeric|min:1|max:100',
        ];
    }
    public function messages()
    {
        return [
            'skills.*.required' => 'Skill Field is required',
            'percents.*.required' => 'Percent Field is required',
            'percents.*.numeric' => 'Percent Field should be a number',
        ];
    }
}


