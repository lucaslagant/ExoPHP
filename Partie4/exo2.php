<?php
$endDate = 1675692131;
$findeformation = date("d/m/Y", $endDate);
$dateNow = date("d/m/Y");
$temprestant=$findeformation-$dateNow;
echo 'La fin est formation est le : '.$findeformation.'<br>Nous somme le :'.$dateNow.'<br> Le temp restant est de :'.$temprestant.' jours';

?>