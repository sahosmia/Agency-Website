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

       protected function prepareForValidation()
    {
        if ($this->end_date) {
            $this->merge([
                'end_date' => \Carbon\Carbon::createFromFormat('m/d/Y', $this->end_date)->format('Y-m-d'),
            ]);
        }
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
            'vacancy_category_id' => 'required|exists:vacancy_categories,id',
            'type' => 'nullable|string',
            'location' => 'nullable|string',
            'end_date' => 'nullable|date',
            'benefits' => 'nullable|string',
            'responsibilities' => 'required|string',
            'requirements' => 'required|string',
            'skills_required' => 'required|string',
            'weekly_holidays' => 'required|string',
            'salary' => 'required|string',
            'others' => 'nullable|string',
            'is_active' => 'nullable|boolean',
        ];
    }
}
