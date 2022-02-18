<?php

$temp = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76,
    73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

$cel = ($temp - 32) * (5/9);
foreach ($temp => ($temp - 32) * (5/9));

echo "Temperatur Celcius : $cel" ;

$low = min($temp);
$hi = max($temp);

echo "Lägst temperatur: ", $low, "F <br>";
echo "Högst temperatur: ", $hi, "F <br>";

$tlen = count($temp);

$tempav = array_sum($temp) / $tlen;
echo "Genomsnitt temperatur: ", number_format($tempav, 2). "F <br>";

sort($temp);
echo "Fem lägst temperaturer: ";
for ($i=0; $i< 5; $i++)
{
    echo $temp[$i]."F, ";
}
echo " och fem högsta temperaturer: ";
for ($i=($tlen-5); $i< ($tlen); $i++) {
    echo $temp[$i] . ", ";
}




