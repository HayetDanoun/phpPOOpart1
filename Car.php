<?php

class Car{
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $typeEnergie;

    private int $levelCarburant;

    public function __construct(string $color){
        $this->color = $color;
    }    
    public function getNbWheels(): int { return $this->nbWheels;}
    public function getCurrentSpeed():int { return $this->currentSpeed ;}
    public function getColor(): string { return $this->color;}
    public function getNbSeats():int { return $this->nbSeats ;}
    public function getTypeEnergie(): string { return $this->typeEnergie;}
    public function getLevelCarburant(): int { return $this->levelCarburant;}
 

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
    public function setTypeEnergie(int $typeEnergie): void { 
        if($typeEnergie >= 0) {
            $this->typeEnergie = $typeEnergie;
        }
    }

    public function setLevelCarburant(int $levelCarburant): void { 
        $this->levelCarburant = $levelCarburant;
    }

    public function start(){}
    public function advance(){}
    public function brake(){}

}

?>