<?php


namespace App;


class LinearSearch
{
    private $key;

    private function __construct($key)
    {
        $this->key = $key;
    }

    public static function find($key): LinearSearch
    {
        return new self($key);
    }

    public function in($searchArray): int
    {
        if (empty($searchArray)) {
            return -1;
        }

        foreach ($searchArray as $i => $item) {
            if($searchArray[$i] === $this->key) {
               return $i;
            }
        }
        return -1;
    }
}