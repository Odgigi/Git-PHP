<?php

class Cercle {
    public int $rayon = 30;

    public function aire(): float{
        return (3.14 * ($this->rayon)**2);
    }
    public function perimetre(): float{
        return 2* (3.14 * $this->rayon);
    }
}

$c = new Cercle();
echo $c->aire() . "<br>";
echo $c->perimetre() . "<br>";