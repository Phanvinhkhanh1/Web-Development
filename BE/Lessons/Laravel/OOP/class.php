<?php
 class Rectangle {
    public $width;
    public $height;

    public function __construct(){
        $this->height = 50;
        $this->width = 100;
    }

    public function getPerimeter() {
        return 2 * ($this -> width + $this -> height);
    }

    public function getArea() {
        return $this -> width * $this -> height;
    }
 }

 $a = new Rectangle();

 echo $a -> getPerimeter();
 print("<br/>");
 echo $a -> getArea();

?>