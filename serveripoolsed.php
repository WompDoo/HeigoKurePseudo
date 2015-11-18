
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




class Isik
{
    var $ees = "Heigo";
    var $pere = "Kure";
    var $vanus = 20;
    var $sugu = "mees";
}
$heigo = new Isik;
$heigo_algab_vokaaliga = false;
echo "<p>" . $heigo->ees . " " . $heigo->pere . " (" . $heigo->vanus . ")</p>";
if ($heigo_algab_vokaaliga) {
    echo "<p>Nimi algab vokaaliga</p>";
};



