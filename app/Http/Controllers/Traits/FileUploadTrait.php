<?php

namespace App\Http\Controllers\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

trait FileUploadTrait
{
    public function uploadFile(Request $request, $fieldName, $directory)
    {
        if ($request->hasFile($fieldName)) {
            return $request->file($fieldName)->store($directory, 'public');
        }
        return null;
    }

    public function updateFile(Request $request, $fieldName, $directory, $model)
    {
        if ($request->hasFile($fieldName)) {
            if ($model->{$fieldName}) {
                Storage::disk('public')->delete($model->{$fieldName});
            }
            return $request->file($fieldName)->store($directory, 'public');
        }
        return $model->{$fieldName};
    }

    public function deleteFile($model, $fieldName)
    {
        if ($model->{$fieldName}) {
            Storage::disk('public')->delete($model->{$fieldName});
        }
    }
}
