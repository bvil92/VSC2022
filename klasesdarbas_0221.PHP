<?php

$myfile = fopen("Labas_pasauli1.html", "r") or die("Unable to open file!");
echo fread($myfile,filesize("Labas_pasauli1.html"));
fclose($myfile);

