<?php
class Paard {
    private $naam;
    private $gewicht;
    private $kleur;

    public function __construct($naam, $gewicht, $kleur) {
        $this->naam = $naam;
        $this->gewicht = $gewicht;
        $this->kleur = $kleur;
    }

    public function getNaam() {
        return $this->naam;
    }

    public function getGewicht() {
        return $this->gewicht;
    }

    public function getKleur() {
        return $this->kleur;
    }

    public function setNaam($naam) {
        $this->naam = $naam;
    }

    public function setGewicht($gewicht) {
        $this->gewicht = $gewicht;
    }

    public function setKleur($kleur) {
        $this->kleur = $kleur;
    }
}
?>