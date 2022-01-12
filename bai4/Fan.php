<?php

class Fan
{
    private $fast;
    private $medium;
    private $slow;
    private $speed;
    private $on;
    private $radius;
    private $color;

    public function __construct()
    {
        $this->fast = 3;
        $this->medium = 2;
        $this->slow = 1;
        $this->speed = $this->slow;
        $this->on = false;
        $this->radius = 5;
        $this->color = "blue";

    }


    public function getFast(): int
    {
        return $this->fast;
    }


    public function setFast(int $fast): void
    {
        $this->fast = $fast;
    }

    public function getMedium(): int
    {
        return $this->medium;
    }

    public function setMedium(int $medium): void
    {
        $this->medium = $medium;
    }


    public function getSlow(): int
    {
        return $this->slow;
    }


    public function setSlow(int $slow): void
    {
        $this->slow = $slow;
    }

    public function getSpeed(): int
    {
        return $this->speed;
    }


    public function setSpeed(int $speed): void
    {
        $this->speed = $speed;
    }


    public function getOn(): bool
    {
        return $this->on;
    }


    public function setOn(bool $on): void
    {
        $this->on = $on;
    }

    public function getRadius(): int
    {
        return $this->radius;
    }

    public function setRadius(int $radius): void
    {
        $this->radius = $radius;
    }


    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }
    public function toSting()
    {
    if ($this->on){
        return "Fan color: ". $this->getColor()." - "." Fan radius: " . $this->getRadius()." - " . "fan is off";
    }else{
        return " Fan Speed: " .$this->getSpeed()." - " ."Fan color: ". $this->getColor()." - "." Fan radius: " .$this ->getRadius()." - " . "fan is on";
    }
    }


}