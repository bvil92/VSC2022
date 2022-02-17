<?php

$ceu = [
   "Italy" => "Rome",
   "Luxembourg" => "Luxembourg",
   "Belgium" => "Brussels",
   "Denmark" => "Copenhagen",
   "Finland" => "Helsinki",
   "France" => "Paris",
   "Slovakia" => "Bratislava",
   "Slovenia" => "Ljubljana",
   "Germany" => "Berlin",
   "Greece" => "Athens",
   "Ireland" => "Dublin",
   "Netherlands" => "Amsterdam",
   "Portugal" => "Lisbon",
   "Spain" => "Madrid",
   "Sweden" => "Stockholm",
   "United Kingdom" => "London",
   "Cyprus" => "Nicosia",
   "Lithuania" => "Vilnius",
   "Czech Republic" => "Prague",
   "Estonia" => "Tallin",
   "Hungary" => "Budapest",
   "Latvia" => "Riga",
   "Malta" => "Valetta",
   "Austria" => "Vienna",
   "Poland" => "Warsaw",
] ;

rsort($ceu);
$clength = count($ceu);
for($j = 0; $j < $clength; $j++) {
    echo $ceu[$j];
    echo "<br>";}

$masyvoIlgis = count($ceu);

for ($i = 0 ; i < $masyvoIlgis; $i++){
if ($i % $x == 0){

}
}

foreach ($ceu as $valstybe => $sostine) {
    echo "Lands $valstybe huvudstad: $sostine" ;
    "<br>";
}

vardump(array_keys($ceu));