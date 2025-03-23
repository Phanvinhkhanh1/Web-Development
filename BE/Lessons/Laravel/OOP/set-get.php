<?php
 class Rectangle {
    private $width;
    private $height;

    public function setValue($width, $height){
        $this->height = $height;
        $this->width = $width;
    }

    public function getPerimeter() {
        return 2 * ($this->width + $this->height);
    }

    public function getArea() {
        return $this->width * $this->height;
    }
 }

$a = new Rectangle();
$a -> setValue(100, 200);
echo $a->getPerimeter();
echo "<br/>";
echo $a->getArea();

?>