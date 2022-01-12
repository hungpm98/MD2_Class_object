<?php

class QuadraticEquation
{
    private $a;
    private $b;
    private $c;


    function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;

    }


    public function getA()
    {
        return $this->a;
    }


    public function getB()
    {
        return $this->b;
    }


    public function getC()
    {
        return $this->c;
    }

    public function getDiscriminant()
    {
        return ($this->getB() * $this->getB()) - (4 * $this->getC() * $this->getA());
    }

    public function Root1()
    {
        $r1 = -$this->getB() + sqrt($this->getDiscriminant());
        $r2 = 2 * ($this->getA());
        return "Nghiem 1 la " . $r1 / $r2;
    }

    public function Root2()
    {
        $r1 = -$this->getB() - sqrt($this->getDiscriminant());
        $r2 = 2 * ($this->getA());
        return "Nghiem 2 la " . $r1 / $r2;
    }

    public function Root3()
    {
        $r1 = -$this->getB();
        $r2 = 2 * ($this->getA());
        return "Nghiem la " . $r1 / $r2;
    }
}