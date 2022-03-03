<?php



class Cuadrado
{

    /** @var $lado */
    private $lado;


    public function getLado(): float
    {
        return $this->lado;
    }

    public function setLado($lado): void
    {
        $this->lado = $lado;
    }

    public function area()
    {
        return $this->lado * $this->lado;
    }


}
