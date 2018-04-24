<?php

class Triangulo
{
  private $base;
  private $altura;

  function __construct()
  {
  }

  public function getBase()
    {
        return $this->base;
    }
    public function setBase($base)
    {
        $this->base = $base;
     }

     public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    public function area(){
      return (($this->base * $this->altura)/2);
    }

    public function perimetro(){
      return ($this->base + ($this->altura * 2));
    }

}


 ?>
