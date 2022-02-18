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
   "Estonia" => "Tallinn",
   "Hungary" => "Budapest",
   "Latvia" => "Riga",
   "Malta" => "Valetta",
   "Austria" => "Vienna",
   "Poland" => "Warsaw",
] ;

sort($ceu);

foreach ($ceu as $valstybe => $sostine) {
    echo "Lands $valstybe huvudstad: $sostine <br>";
}

var_dump(array_keys($ceu));

