<?php

class Car{
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;

    private int $energyLevel;

    public function __construct(string $color){
        $this->color = $color;
    }    
    public function getNbWheels(): int { return $this->nbWheels;}
    public function getCurrentSpeed():int { return $this->currentSpeed ;}
    public function getColor(): string { return $this->color;}
    public function getNbSeats():int { return $this->nbSeats ;}
    public function getEnergy(): string { return $this->energy;}
    public function getEnergyLevel(): int { return $this->energyLevel;}
 

    public function setNbWheels(int $nbWheels): void { 
        if($nbWheels >= 0) {
            $this->nbWheels = $nbWheels;
        }
    }
    public function setCurrentSpeed(int $currentSpeed): void { 
        if($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }
    public function setColor(int $color): void { 
         $this->color = $color;
    }
    public function setNbSeats(int $nbSeats): void { 
        if($nbSeats >= 0) {
            $this->nbSeats = $nbSeats;
        }
    }
    public function setEnergy(int $energy): void { 
        if($energy >= 0) {
            $this->energy = $energy;
        }
    }

    public function setEnergyLevel(int $energyLevel): void { 
        $this->energyLevel = $energyLevel;
    }

    public function start(){}
    public function advance(){}
    public function brake(){}

}

?>