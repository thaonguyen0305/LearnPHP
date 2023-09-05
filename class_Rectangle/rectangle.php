<?php
class Rectangle {

    function __construct(
        public int $width =0,
        public int $height =0)
    {
    }

    function getArea(): int
    {
        return $this->width * $this->height;
    }

    function getPerimeter(): int
    {
        return (($this->height + $this->width) * 2);
    }

    function display(): string
    {
        return "Rectangle(" . "widgth=" . $this->width . "," . "height=" . $this->height . ")" ;
    }
    
}
?>