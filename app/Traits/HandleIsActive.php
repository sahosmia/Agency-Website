<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait HandleIsActive
{
    /**
     * @param Request $request
     * @param array $data
     * @return array
     */
    private function handleIsActive(Request $request, array $data): array
    {
        $data['is_active'] = $request->boolean('is_active');

        return $data;
    }
}
