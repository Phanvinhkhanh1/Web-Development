<?php
class User {
    private $attr_1;
    protected $attr_2 = 100;
    public $attr_3;

    function getAttr() {
        return $this ->attr_1;
    }
}
class Demo extends User {
    public function __construct() {
        echo $this -> attr_2;
    }
}

$a = new Demo();
?>