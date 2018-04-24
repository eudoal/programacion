<?php

class Circulo
{
  private $radio;

  function __construct()
  {
  }

    public function getRadio()
    {
        return $this->radio;
    }

    public function setRadio($radio)
    {
        $this->radio = $radio;
     }
     public function area(){
       return round((($this->radio * $this->radio)*pi()),2);
     }

     public function perimetro(){
       return round((2 * pi() * $this->radio),2);
     }
}

 ?>
