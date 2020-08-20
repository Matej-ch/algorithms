<?php


use App\Bubble;
use PHPUnit\Framework\TestCase;

class BubbleSortTest extends TestCase
{
    /** @test
     *
     * @dataProvider arraysSetup
     * @param $unsorted
     * @param $sorted
     */
    function it_returns_sorted_array($unsorted,$sorted)
    {
        $result = Bubble::sort($unsorted);
        self::assertEquals($sorted,$result);
    }

    public function arraysSetup()
    {
        return [
            [[],[]],
            [[20, 3, 35, 21, 12],[3, 12, 20, 21, 35]],
            [[1,2,3,4,5,6,7],[1,2,3,4,5,6,7]],
            [[2,9,2,1,5,8,8,5,6,2225,2,16],[1,2,2,2,5,5,6,8,8,9,16,2225]]
        ];
    }
}
