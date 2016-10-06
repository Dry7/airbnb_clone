<?php

namespace App\Helpers;

/**
 * String helper
 *
 * @package App\Helpers
 */
class StringHelper
{
    /**
     * Generate url from google places terms
     *
     * @param $terms
     * @return string
     */
    public static function terms2url($terms)
    {
        $url = [];

        foreach ($terms as $term) {
            $url[] = preg_replace('/ /', '-', $term->value);
        }

        return implode('--', $url);
    }
}