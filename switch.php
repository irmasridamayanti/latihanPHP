<?php
$day = date ("D");
switch ($day) {
    case 'Sun': 
        $hari = "minggu";
        break;
    case 'Mon': 
        $hari = "senin";
        break;
    case 'Tue': 
        $hari = "selasa";
        break;
    case 'Wed': 
        $hari = "rabu";
        break;
    case 'Thu': 
        $hari = "kamis";
        break;
    case 'Fri': 
        $hari = "jum'at";
        break;
    case 'Sat': 
        $hari = "sabtu";
        break;
    default:
        $hari = "kiamat";
}
echo "hari ini <b> $hari </b>";
?>