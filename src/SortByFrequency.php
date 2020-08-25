<?php


namespace App;


class SortByFrequency implements SortInterface
{

    public static function sort($string)
    {
        $letters = str_split($string);

        $letters = array_filter($letters, static function ($val) { return !empty(trim($val)); });

        $tempArr = [];
        foreach ($letters as $letter) {
            if(isset($tempArr[$letter])) {
                $tempArr[$letter] = [$letter, $tempArr[$letter][1] + 1];
            } else {
                $tempArr[$letter] = [$letter, 1];
            }
        }

        $character  = array_column($tempArr, '0');
        $count = array_column($tempArr, '1');

        array_multisort($count, SORT_DESC, $character, SORT_ASC, $tempArr);

        $result = '';
        foreach ($tempArr as $char => $values) {
            $result .= str_repeat($char,$values[1]);
        }

        return $result;
    }
}