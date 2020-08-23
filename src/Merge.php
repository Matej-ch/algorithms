<?php


namespace App;


class Merge implements SortInterface
{

    private static array $unsortedArray = [];

    private static array $tempArray = [];

    public static function sort($unsorted): array
    {
        static::$unsortedArray  = $unsorted;
        $length = count($unsorted);

        self::mergesort(0,$length - 1);

        return static::$unsortedArray;
    }

    private static function mergesort(int $start, int $end): void
    {
        if($start < $end) {
            $middle = $start + ($end - $start) / 2;

            self::mergesort($start, $middle);

            self::mergesort($middle + 1, $end);

            self::merge($start,$middle,$end);
        }
    }

    private static function merge(int $start, int $middle, int $end)
    {
        for ($i = $start; $i <= $end;$i++) {
            static::$tempArray[$i] = static::$unsortedArray[$i];
        }

        $i = $start;
        $j = $middle + 1;
        $k = $start;

        while($i <= $middle && $j <= $end) {
            if(static::$tempArray[$i] <= static::$tempArray[$j]) {
                static::$unsortedArray[$k] = static::$tempArray[$i];
                $i++;
            } else {
                static::$unsortedArray[$k] = static::$tempArray[$j];
                $j++;
            }
            $k++;
        }

        while ($i <= $middle) {
            static::$unsortedArray[$k] = static::$tempArray[$i];
            $k++;
            $i++;
        }
    }
}