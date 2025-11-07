<?php

namespace App\Http\Requests;

use App\Http\Requests\Traits\HandlesRequestValidation;
use Illuminate\Foundation\Http\FormRequest;

class UpdateVacancyRequest extends FormRequest
{
    use HandlesRequestValidation;

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation()
    {
        $this->prepareIsActive();
        $this->prepareEndDate();
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
            'type' => 'required|string',
            'location' => 'nullable|string',
            'end_date' => 'nullable|date',
            'benefits' => 'nullable|string',
            'responsibilities' => 'nullable|string',
            'requirements' => 'nullable|string',
            'skills_required' => 'nullable|string',
            'weekly_holidays' => 'nullable|string',
            'salary' => 'nullable|string',
            'others' => 'nullable|string',
            'is_active' => 'nullable|boolean',
        ];
    }
}
