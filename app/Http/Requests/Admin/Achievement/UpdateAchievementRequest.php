<?php

namespace App\Http\Requests\Admin\Achievement;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAchievementRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
       return [
            'home_page_show' => 'required|boolean',
            'sort' => 'required|integer',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'value' => 'required',
        ];
    }
}
