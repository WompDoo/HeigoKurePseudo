<?php
//$eesnimi = "Heigo";
//$perekonnanimi = "Kure";
//$vanus = "20";
$heigo = new isik;
$vowels = array('A', 'E', 'I', 'O', 'U', 'Õ', 'Ä', 'Ö', 'Ü', 'a', 'e', 'i', 'o', 'u', 'õ', 'ä', 'ö', 'ü');
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

if (!empty($_GET['koer'])) {
    echo "<p>".$_GET['koer']."</p>";
}

        if (!empty($_POST['kass'])) {
            echo "Kass oli: ".$_POST['kass'];
        }
    ?>

<form action="?" method="post">

    Name  <input name="kass"><br>

    <input type="submit" value="Estia">

</form>














