<?php
namespace App\Helpers;

use Carbon\Carbon;

/**
 * Helper class for commonly used functions
 */
class Helper
{
    /**
     * Get formatted timestamp
     *
     * @param [type] $timestamp
     * @return formattedTimestamp String
     */
    public static function getFormattedTimestamp($timestamp)
    {
        return Carbon::parse($timestamp)->format('d-m-Y H:i:s');
    }

    /**
     * Get formatted date
     *
     * @param $timestamp
     * @return string
     */
    public static function getFormattedDate($timestamp)
    {
        return Carbon::parse($timestamp)->format('d-m-Y');
    }
}
