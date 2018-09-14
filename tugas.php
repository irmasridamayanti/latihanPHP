<?php
$Hari = 50000;
$Makanan = 25000;
$Minuman = 10000;
$berbelanja = $Makanan + $Minuman;
$sisa_uang = $Hari +- $berbelanja;

echo "uang hari : $hari<br>";
echo "makan : $Makanan<br>";
echo "minum : $Minuman<br>";
echo "hari menghabiskan uang sebesar : $berbelanja<br>";
echo "sisa uang hari : $sisa_uang<br>";

if ($sisa_uang<=0) {
    echo "hari <b>BOROS</b>";
}else{
    echo "hari <b>HEMAT</b>";
}
?>
