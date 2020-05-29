<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;

class FileUploader
{
    public static function uploadFile($file, $file_path)
    {
        if ($image = $file) {
            $path = Storage::put('public/' . $file_path, $image);
            return env('APP_URL') . Storage::url($path);
        }
        return '';
    }

    public static function uploadBase64File($file, $extension, $file_path)
    {
        $image = base64_decode($file);

        $image_name = rand(111111111, 999999999) . '.' . $extension;
        Storage::put('public/' . $file_path . '/' . $image_name, $image);

        return env('APP_URL') . '/storage/' . $file_path . '/' . $image_name;
    }
}
