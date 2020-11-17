<?php
/**
 * Created by PhpStorm.
 * User: lucian
 * Date: 09.05.2018
 * Time: 16:07
 */

namespace LucianOvidiuFilote\ArrayHelper;


/**
 * Class ArrayHelper
 * @package AppBundle\Helpers
 */
class ArrayHelper
{
    public static function fillArrayToLength($array, $length, $value = null)
    {
        end($array);
        $lastIndex = key($array);
        $startIndex = $lastIndex + 1;
        $num = $length - count($array);
        $fill = array_fill($startIndex, $num, $value);
        return $array + $fill;
    }


    public static function getKeyOfMinValue($array)
    {
        return array_keys($array, min($array))[0];
    }

    public static function getKeyOfMaxValue($array)
    {
        return array_keys($array, max($array))[0];
    }

}