<?php
$eesnimi = "Heigo";
$perekonnanimi = "Kure";
$vanus = "20";
echo "$eesnimi $perekonnanimi ($vanus)";
$heigo = new isik;
$vowels = array('A', 'E', 'I', 'O', 'U', '�', '�', '�', '�', 'a', 'e', 'i', 'o', 'u', '�', '�', '�', '�');
if (in_array(substr($heigo->eesnimi, 0, 1), $vowels)) {
    $eesnimi_algab_vokaaliga = true;
} else {
    $eesnimi_algab_vokaaliga = false;
}
echo "<br>";
class isik
{
    var $eesnimi = "Heigo";
    var $perekonnanimi = "Kure";
    var $vanus = 21;
    var $sugu = "Mees";
}
$heigo = new isik;
echo "" . $heigo->eesnimi . " " . $heigo->perekonnanimi . " (" . $heigo->vanus . ") " . $heigo->sugu . " ";
if ($eesnimi_algab_vokaaliga) {
    echo "<p>Nimi algab vokaaliga</p>";
};
echo "<br>";
$a = 1.23;
$b = 2.34;
$float_sum= $a + $b;
echo " $float_sum ";
echo $_GET['koer'];
?>

<form action="?" method="post">
    <input name="kass">
    <input type="submit">
</form>















