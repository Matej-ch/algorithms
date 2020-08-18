<?php


namespace App;


class BinarySearch
{
    private $key;

    public function __construct($key)
    {
        $this->key = $key;
    }

    public static function find($key): BinarySearch
    {
        return new self($key);
    }

    public function in($searchArray): int
    {
        if(empty($searchArray)) {
            return -1;
        }

        $start = 0;
        $end = count($searchArray) - 1;

        while ($start <= $end) {
            $middle = floor(($start + $end) / 2);

            if($this->key === $searchArray[$middle]) {
                return $middle;
            }

            if($this->key < $searchArray[$middle]) {
                $end = $middle - 1;
            } else {
                $start = $middle + 1;
            }
            //echo '<pre>$start: '.print_r($start,true).'</pre>';
            //echo '<pre>$end: '.print_r($end,true).'</pre>';die();
        }
        return -1;
    }
}