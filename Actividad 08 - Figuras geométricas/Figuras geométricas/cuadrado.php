<?php

class Cuadrado
{
  private $lado;

  function __construct()
  {
  }

    public function getLado()
    {
        return $this->lado;
    }

    public function setLado($lado)
    {
        $this->lado = $lado;
     }
     public function area(){
       return $this->lado * $this->lado;
     }

     public function perimetro(){
       return 4 * $this->lado;
     }
}

 ?>
