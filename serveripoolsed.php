
<?php

$isik = array(
    "eesnimi => Heigo",
    "perekonnanimi => Kure",
    "vanus => 20",
);
echo "<p>" . $isik['eesnimi'] . " " . $isik['perekonnanimi'] . " (" . $isik['vanus'] . ")</p>";
echo "<pre>";

/*
$eesnimi = "Heigo";
$perekonnanimi = "Kure";
$vanus = "20";
echo "$eesnimi $perekonnanimi($vanus)";
*/
$heigo_algab_vokaaliga = false;
echo $heigo_algab_vokaaliga;


if ($heigo_algab_vokaaliga) {
    echo "<p>Nimi algab vokaaliga</p>";
};


