<?php


namespace App;


class Bubble implements SortInterface
{

    public static function sort($unsorted): array
    {
        if(empty($unsorted)) {
            return [];
        }

        $length = count($unsorted);

        for ($i = 0; $i < $length - 1; $i++) {
            $isSorted = true;
            for ($j = 0; $j < ($length - $i - 1); $j++) {
                if($unsorted[$j] > $unsorted[$j + 1]) {

                    $temp = $unsorted[$j];
                    $unsorted[$j] = $unsorted[$j + 1];
                    $unsorted[$j + 1] = $temp;
                    $isSorted = false;
                }
            }

            if($isSorted) { break; }
        }

        return $unsorted;
    }
}