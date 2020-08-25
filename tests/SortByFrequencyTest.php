<?php


use App\SortByFrequency;
use PHPUnit\Framework\TestCase;

class SortByFrequencyTest extends TestCase
{
    /** @test
     *
     * @dataProvider strings
     * @param $input
     * @param $expected
     */
    public function it_returns_characters_sorted_by_frequency($input,$expected)
    {
        $actual = SortByFrequency::sort($input);

        self::assertEquals($expected,$actual);
    }

    public function strings()
    {
        return [
            ['',''],
            ['Aabb','bbAa'],
            ['treeter','eeerrtt'],
            ['tree','eert'],
            ['cccaaa','aaaccc'],
            ['this is a test','ssstttiiaeh'],
        ];
    }
}
