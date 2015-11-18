
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



$vokaal = array('A', 'E', 'I', 'O', 'U', 'Õ', 'Ä', 'Ö', 'Ü', 'a', 'e', 'i', 'o', 'u', 'õ', 'ä', 'ö', 'ü');
if (in_array(substr($heigo->ees, 0, 1), $vokaal)) {
    $heigo_algab_vokaaliga = true;
} else {
    $heigo_algab_vokaaliga = false;
}


$floating1 = 1.23;
$floating2 = 2.34;
$float_sum = $floating1 + $floating2;
echo "<p>" . $float_sum . "</p>";

/*echo $_GET['koer'];*/
?>

