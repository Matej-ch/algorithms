<?php


namespace App;


class Quick implements SortInterface
{

    private static array $unsortedArray = [];

    public static function sort($unsorted)
    {
        if(empty($unsorted)) {
            return [];
        }

        $length = count($unsorted);
        static::$unsortedArray  = $unsorted;

        self::quickSort(0, $length -1);

        return static::$unsortedArray;
    }

    private static function quickSort(int $start, int $end)
    {
        $i = $start;
        $j = $end;

        $pivot = static::$unsortedArray[$start + ($end - $start) / 2];

        while ($i < $j) {
            while (static::$unsortedArray[$i] < $pivot) {
                $i++;
            }

            while (static::$unsortedArray[$j] > $pivot) {
                $j--;
            }

            if($i <= $j) {
                $temp = static::$unsortedArray[$i];
                static::$unsortedArray[$i] = static::$unsortedArray[$j];
                static::$unsortedArray[$j] = $temp;
                $i++;
                $j--;
            }
        }

        if($start < $j) {
            self::quickSort($start,$j);
        }

        if($i < $end) {
            self::quickSort($i,$end);
        }
    }
}