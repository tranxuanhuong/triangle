<?php


class Shape
{
    public $color;

    public function __construct($color)
    {
        $this->color=$color;

    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }
}