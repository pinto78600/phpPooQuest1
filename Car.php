<?php

class Car
{
    /**
     * @var string
     */
    private $color;

    /**
    * @var integer
    */
    private $currentSpeed;
    /**
    * @var integer
    */
    private $nbSeats;
    /**
    * @var integer
    */
    private $nbWheels;
    /** 
    * @var integer
    */
    private $energy;
    /**
     * @var integer
     */
    private $energyLevel;

    public function __construct(string $color,string $energy,int $nbSeats )
    {
        $this->color=$color;
        $this->nbSeats=$nbSeats;
        $this->energy=$energy;
    }

    public function forward()
    {
        $this->currentSpeed = 15;
        return 'Plus vite !';
    }
    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Freine !!!";
        }
        $sentence .= "Je suis arrêter !";
        return $sentence;
    }
    public function start()
    {
        $this->currentSpeed = 0;
        return 'Démarre !';
    }
     /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }
    /**
    * @param string $color
    */
    public function setColor(string $color) : void
    {
        $this->color = $color;
    }
    /**
    * @return integer $nbWheels
    */
    public function setNbWheels(int $nbWheels) : void
    {
        $this->nbWheels = $nbWheels;
    }
     /**
     * @return string
     */
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    } /**
    * @return integer $currentSpeed
    */
    public function setCurrentSpeed(int $currentSpeed) : void
    {
        $this->currentSpeed = $currentSpeed;
    }
     /**
     * @return string
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    } /**
    * @return integer $nbSeats
    */
    public function setNbSeats(int $nbSeats) : void
    {
        $this->nbSeats = $nbSeats;
    }
     /**
     * @return string
     */
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    } /**
     /**
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    } /**
    * @return integer $energy
    */
    public function setEnergy(string $energy) : void
    {
        $this->energy = $energy;
    }
     /**
     * @return string
     */
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    } /**
    * @return integer $energyLevel
    */
    public function setEnergyLevel(int $energyLevel) : void
    {
        $this->energyLevel = $energyLevel;
    }
    
}