<?php
 class Rectangle {
    public static $width;
    public static $height;

    // public function __construct(){
    //     $this->height = 50;
    //     $this->width = 100;
    // }

    public static function getPerimeter() {
        return 2 * (self::$width + self::$height);
    }

    public static function getArea() {
        return self::$width * self::$height;
    }
 }

//  $a = new Rectangle();

//  $a::$height = 10;
//  $a::$width = 20;

//  echo $a::getPerimeter();
//  print("<br/>");
//  echo $a::getArea();

class Demo {
    function __construct() {
        Rectangle::$width = 10;
        Rectangle::$height = 20;
        echo Rectangle::getArea();
    }
}

new Demo;
?>