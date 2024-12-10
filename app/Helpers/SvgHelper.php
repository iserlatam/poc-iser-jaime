<?php

namespace App\Helpers;

class SvgHelper
{
    public static function load(string $filename): string
    {
        $path = resource_path("svg/{$filename}.svg");

        if (file_exists($path)) {
            return file_get_contents($path);
        }

        return '';
    }
}
