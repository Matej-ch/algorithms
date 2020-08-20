<?php


use App\LinearSearch;
use PHPUnit\Framework\TestCase;

class LinearSearchTest extends TestCase
{
    /** @test */
    public function it_returns_minus_one_for_empty_array()
    {
        $result = LinearSearch::find(5)->in([]);

        self::assertEquals(-1,$result);
    }

    /** @test */
    public function it_returns_minus_one_if_value_not_found()
    {
        $result = LinearSearch::find(5)->in([1,2,3]);

        self::assertEquals(-1,$result);
    }

    /** @test
     *
     * @dataProvider searchArrays
     * @param $searchArray
     * @param $key
     * @param $expected
     */
    function it_returns_found_numer_from_array($searchArray,$key,$expected)
    {
        $result = LinearSearch::find($key)->in($searchArray);

        self::assertEquals($expected,$result);
    }

    public function searchArrays()
    {
        return [
            [[2,5,9,35,60,68,87,93],99,-1],
            [[1,2,3,5,6,7],6,4],
            [[1,2,3,5,6,7],5,3],
            [[1,2,3,5,6,7],3,2],
            [[1,2,3,4,5,6,7],4,3],
            [[2,5,9,35,60,68,87,93],2,0],
            [[2,5,9,35,60,68,87,93],60,4],
            [[2,5,9,35,60,68,87,93],68,5],
            [[2,5,9,35,60,68,87,93],35,3],
        ];
    }
}
