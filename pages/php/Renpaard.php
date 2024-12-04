<?php
require_once 'Paard.php';

class Renpaard extends Paard {
    private $ren;

    public function __construct($naam, $gewicht, $kleur, $ren) {
        // Call the parent constructor
        parent::__construct($naam, $gewicht, $kleur);
        $this->ren = $ren;
    }

    public function getRen() {
        return $this->ren;
    }

    public function setRen($ren) {
        $this->ren = $ren;
    }
}
?>