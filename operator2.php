<?php
$a =5;
$b =5;
$c = false;

echo"$a == $b : ".($a == $b);
echo"<br>$a != $b : ".($a != $b);
echo"<br>$a >  $b : ".($a >  $b);
echo"<br>$a <  $b : ".($a <  $b);
echo"<br>($a == $b) && ($a > $b) : ".(($a != $b) && ($a > $b));
echo"<br>($a == $b) || ($a > $b) : ".(($a != $b) || ($a > $b));
echo "<br>! Hasilnya : ". (!$c);

echo "<br><br> contoh lebih dari". ($a<=$b);
?>