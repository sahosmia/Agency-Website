<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVacancyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:vacancies,slug,' . $this->route('vacancy')->id,
            'vacancy_category_id' => 'required|exists:vacancy_categories,id',
            'type' => 'nullable|string',
            'location' => 'nullable|string',
            'end_date' => 'nullable|date',
            'benefits' => 'nullable|string',
            'responsibilities' => 'nullable|string',
            'requirements' => 'nullable|string',
            'skills_required' => 'nullable|string',
            'weekly_holidays' => 'nullable|string',
            'salary' => 'nullable|string',
            'others' => 'nullable|string',
        ];
    }
}
