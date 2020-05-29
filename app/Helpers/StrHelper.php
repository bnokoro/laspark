<?php

namespace App\Helpers;

use Illuminate\Support\Str;

class StrHelper
{
    /**
     * Limits string to int $limit amount
     * @param $text
     * @param int $limit
     * @return string
     */
    public static function limit($text, $limit = 30)
    {
        return Str::limit($text, $limit, $end = '...');
    }
}
