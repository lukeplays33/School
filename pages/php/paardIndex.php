<?php
require_once 'Paard.php';
require_once 'Renpaard.php';

$paard = new Paard("A", 450, "bruin");

$renpaard = new Renpaard("B", 400, "zwart", true);

echo "De kleur van het paard is: " . $paard->getKleur() . "<br>";

echo "De kleur van het renpaard is: " . $renpaard->getKleur() . "<br>";
?>