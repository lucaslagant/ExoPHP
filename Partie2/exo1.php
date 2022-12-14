<?php

$table = array(
    "Janvier" => 31, 
    "Février" => 28, 
    "Mars" => 31, 
    "Avril" => 30, 
    "Mai" => 31, 
    "Juin" => 30,
    "Juillet" => 31,
    "Aout" => 31,
    "Septembre" => 30,
    "Octobre" => 31,
    "Novembre" => 30,
    "Decembre" => 31
);

foreach ($table as $mois => $jours)
{
    echo "Le mois de " . $mois ." contient " .$jours . " Jours <br>";
}

?>