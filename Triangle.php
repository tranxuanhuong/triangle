<?php
include_once "Shape.php";

class Triangle extends Shape
{
    public $side1=1;
    public $side2=1;
    public $side3=1;



    public function __construct($color,$side1,$side2,$side3)
    {
        parent::__construct($color);
        $this->side1=$side1;
        $this->side2=$side2;
        $this->side3=$side3;

    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return int
     */
    public function getSide1()
    {
        return $this->side1;
    }

    /**
     * @param int $side1
     */
    public function setSide1($side1)
    {
        $this->side1 = $side1;
    }

    /**
     * @return int
     */
    public function getSide2()
    {
        return $this->side2;
    }

    /**
     * @param int $side2
     */
    public function setSide2($side2)
    {
        $this->side2 = $side2;
    }

    /**
     * @return int
     */
    public function getSide3()
    {
        return $this->side3;
    }

    /**
     * @param int $side3
     */
    public function setSide3($side3)
    {
        $this->side3 = $side3;
    }

    public function getPerimeter(){

        return $per=$this->side1+$this->side2+$this->side3;

    }

    public function getArea(){

        $p=($this->side1+$this->side2+$this->side3)/2;
        $area=sqrt($p*($p-$this->side1)*($p-$this->side2)*($p-$this->side3));
        return $area;
    }

    public function toString(){
        echo "Dien tich =: " . $this->getArea()."<br>"."Chu vi =: " . $this->getPerimeter()."<br>"."Color la : " . parent::getColor();



    }








}