<?php


include_once 'Lightableinterface.php';

class Car  implements LightableInterface
{
    private $currentSpeed = 0;
    private $lightsStatus;
    protected $lights;


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

    public function switchOn(): bool
    {
        $this->lightsStatus = true;
        return true;
    }

    public function switchOff(): bool
    {
        $this->lightsStatus = false;
        return false;
    }

    public function getLightsStatus()
    {
        if ($this->lightsStatus == true) {
            return "Les lumieres sont allumées. <br>";
        }elseif($this->lightsStatus == false){
            return "Les lumieres sont eteintes. <br>";
        }
    }

}

