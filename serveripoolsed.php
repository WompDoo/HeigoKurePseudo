<?php
class isik
{
    var $firstname = "Heigo";
    var $lastname = "Kure";
    var $age = 20;
    var $sex = "<br /> Mees";
}
$heigo = new isik;
$vowels = array('A', 'E', 'I', 'O', 'U', 'Õ', 'Ä', 'Ö', 'Ü', 'a', 'e', 'i', 'o', 'u', 'õ', 'ä', 'ö', 'ü');
if (in_array(substr($heigo->firstname, 0, 1), $vowels)) {
    $eesnimi_algab_vokaaliga = true;
} else {
    $eesnimi_algab_vokaaliga = false;
}
if ($eesnimi_algab_vokaaliga) {
    echo "<p>Nimi algab vokaaliga</p>";
};
echo "<p>" . $heigo->firstname . " " . $heigo->lastname . " (" . $heigo->age . ") " . $heigo->sex . "</p>";
?>