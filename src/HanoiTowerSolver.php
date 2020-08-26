<?php


namespace App;


class HanoiTowerSolver
{
    public string $moves = "";

    public function solve($numOfDisks,$source,$auxiliary,$destination): void
    {
        if($numOfDisks === 1) {
            $this->moves .= "$source -> $destination";
            return;
        }

        $this->solve($numOfDisks - 1,$source,$destination,$auxiliary);

        $this->moves .= " $source -> $destination ";

        $this->solve($numOfDisks - 1,$auxiliary,$source,$destination);
    }
}