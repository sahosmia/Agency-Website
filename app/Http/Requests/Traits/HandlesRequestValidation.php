<?php

namespace App\Http\Requests\Traits;

trait HandlesRequestValidation
{
    /**
     * Converts the is_active attribute to a boolean.
     */
    protected function prepareIsActive()
    {
        $this->merge([
            'is_active' => $this->boolean('is_active'),
        ]);
    }

    /**
     * Converts the end_date attribute from m/d/Y to Y-m-d.
     */
    protected function prepareEndDate()
    {
        if ($this->end_date) {
            try {
                $this->merge([
                    'end_date' => \Carbon\Carbon::createFromFormat('m/d/Y', $this->end_date)->format('Y-m-d'),
                ]);
            } catch (\Exception $e) {
                // Let the validation handle the error
            }
        }
    }
}
