<?php

namespace App\Utilities;

use Illuminate\Support\Facades\Storage;

class Helper{

    public static function storeImage($path, $filename)
    {
        $filesystem = Storage::disk('img-tmp');
        if ($filesystem->exists($filename)) {
            $newFilename = Storage::disk('img')->putFile($path, $filesystem->path($filename));
            $filesystem->delete($filename);
            return $newFilename;
        }
    }

}