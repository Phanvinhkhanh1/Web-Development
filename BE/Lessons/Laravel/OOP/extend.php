<?php
class parentA {
    protected $attr_1 = "Parent A class";

    function getClassName() {
        return $this -> attr_1;
    }
}

class childB extends parentA {
    public $attr_2 = "Child B class";

    function getClassName() {
        return $this -> attr_1;
    }
}

$b = new childB();
echo $b ->getClassName();
?>