<?php

$x = rand(0,100);
echo "$x <br>";
$var1 = 1;
$var2 = 1;
	while ($var1 < $x) {
        $var3 = $var1;
        $var1 = $var1 + $var2;
        $var2 = $var3;
        }

        if ($var1 == $x) {
        	echo "задуманное число входит в числовой ряд";
        }
        else
        	echo "задуманное число НЕ входит в числовой ряд";

?>