<?php

class Skateboard
{
    private $currentSpeed = 0;


    public function __construct( bool $lights)
    {
        $this->lights = $lights;

    }
    public function setCurrentSpeed(int $speed) : void
    {
        $this->currentSpeed = $speed;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

}