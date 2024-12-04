<?php
class Auto
{
    public $name;
    public $color;
    public $weight;
    public $buildYear;
    public $brand;
    public $price;

    public function __giveGas() {
        echo 'Vroom Vroom Mother Fucker';
    }

    public function __remmen() {
        echo 'EIIIIIIIIIIEIEIEIEIEIEIEIEIEIEIE';
    }

    public function __get($item) {
        return $this[$item];
    }
}
?>