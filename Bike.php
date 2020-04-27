<?php
include_once 'Lightableinterface.php';
class Bike  implements LightableInterface
{
    private $currentSpeed = 0;
    private $lightStatus;
    public function __construct(bool $lights)
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
        if ($this->currentSpeed>=10){
            $this->lightStatus= true;
            return true;
        }
        else{
            $this->lightStatus = false;
            return false;
        }
    }

    public function switchOff(): bool
    {
        $this->lightStatus= false;
        return false;
    }

    public function getLightsStatus()
    {
        if ($this->switchOn()) {
            return "La lumière est allumée. <br>";
        }elseif($this->lightStatus == false){
            return "La lumière est eteinte. <br>";
        }
    }
}
