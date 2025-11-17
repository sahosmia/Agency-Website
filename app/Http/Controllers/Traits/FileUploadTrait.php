<?php

namespace App\Http\Controllers\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

trait FileUploadTrait
{
    public function uploadFile(Request $request, $fieldName, $directory)
    {
        if ($request->hasFile($fieldName)) {

            $file = $request->file($fieldName);

            $fileName = uniqid() . '.' . $file->getClientOriginalExtension();

            $file->storeAs($directory, $fileName, 'public');

            return $fileName;
        }

        return null;
    }

    public function updateFile(Request $request, $fieldName, $directory, $model)
    {
        if ($request->hasFile($fieldName)) {

            if ($model->{$fieldName}) {
                Storage::disk('public')->delete($directory . '/' . $model->{$fieldName});
            }

            $file = $request->file($fieldName);
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension();

            $file->storeAs($directory, $fileName, 'public');

            return $fileName;
        }

        return $model->{$fieldName};
    }


    public function deleteFile($model, $fieldName, $directory)
    {
        if ($model->{$fieldName}) {
            Storage::disk('public')->delete($directory . '/' . $model->{$fieldName});
        }
    }
}
