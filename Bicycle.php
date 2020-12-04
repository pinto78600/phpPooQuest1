<?php

// Bicycle.php

class Bicycle
{
    /**
     * @var string
     */
    public $color;

    /**
    * @var integer
    */
    public $currentSpeed;
    /**
    * @var integer
    */
    public $nbSeats = 1;
    /**
    * @var integer
    */
    public $nbWheels = 2;

public function forward()
{
    $this->currentSpeed = 15;

    return "Go !";
}

public function brake(): string
{
   $sentence = "";
   while ($this->currentSpeed > 0) {
       $this->currentSpeed--;
       $sentence .= "Brake !!!";
   }
   $sentence .= "I'm stopped !";
   return $sentence;
}
 /**
 * @return string
 */
public function getColor(): string
{
    return $this->color;
}
}