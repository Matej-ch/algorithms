<?php


namespace App;


class Selection implements SortInterface
{

    public static function sort($unsorted)
    {
        if(empty($unsorted)) {
            return [];
        }

        $length = count($unsorted);

        for ($i = 0; $i < $length - 1; $i++) {

            $minIndex = $i;
            for ($j = $i+1; $j < $length ; $j++) {
                if($unsorted[$j] < $unsorted[$minIndex]) {
                    $minIndex = $j;
                }
            }

            $temp = $unsorted[$minIndex];
            $unsorted[$minIndex] = $unsorted[$i];
            $unsorted[$i] = $temp;
        }

        return $unsorted;
    }
}