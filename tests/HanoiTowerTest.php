<?php


use App\HanoiTowerSolver;
use PHPUnit\Framework\TestCase;

class HanoiTowerTest extends TestCase
{

    /** @test */
    public function it_moves_first_piece_to_destination_for_one_disk()
    {
        $hanoiSolver = new HanoiTowerSolver();
        $hanoiSolver->solve(1,"S","A","D");

        self::assertEquals("S -> D", $hanoiSolver->moves);
    }

    /** @test */
    public function it_solves_for_two_disks()
    {
        $hanoiSolver = new HanoiTowerSolver();
        $hanoiSolver->solve(2,"S","A","D");
        self::assertEquals("S -> A S -> D A -> D",$hanoiSolver->moves);
    }

    /** @test */
    public function it_moves_first_piece_to_destination_for_three_disks()
    {
        $hanoiSolver = new HanoiTowerSolver();
        $hanoiSolver->solve(3,"S","A","D");
        self::assertEquals("S -> D S -> A D -> A S -> D A -> S A -> D S -> D",$hanoiSolver->moves);
    }
}
