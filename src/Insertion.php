<?php


namespace App;


class Insertion implements SortInterface
{

    public static function sort($unsorted): array
    {
        if(empty($unsorted)) {
            return [];
        }

        $length = count($unsorted);

        for ($i=1; $i < $length;$i++) {

            $key = $unsorted[$i];
            $j = $i -1;
            while (($j > -1) && ($unsorted[$j] > $key)) {
                $unsorted[$j+1] = $unsorted[$j];
                $j--;
            }
            $unsorted[$j + 1] = $key;
        }

        return $unsorted;
    }
}