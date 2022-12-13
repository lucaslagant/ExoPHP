<?php
// $dayNumber = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);
$month = array("01" => "Janvier", "02" => "Février", "03" => "Mars", "04" => "Avril","05" => "Mai", "06" => "Juin", "07" => "Juillet", "08" => "Août","09" => "Septembre", "10" => "Octobre",  "11" => "Novembre", "12" => "Décembre");
$day = array("Lundi","Mardi","Mercredi","Jeudi", "Vendredi", "Samedi", "Dimanche");

$numMonth = date('m', $timestamp = null);

if ($numMonth == 12) {
    $beforeMonth = $numMonth - 1;
    $afterMonth = 01;
}
elseif ($numMonth == 1) {
    $beforeMonth = 12;
    $afterMonth = $numMonth + 1;
}
else {
    $beforeMonth = $numMonth - 1;
    $afterMonth = $numMonth + 1;
}
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Partie2/assets/css/style.css">
    <title>Calendar</title>
</head>
<body>
    <caption>
		<a href="<?=$beforeMonth?>">Mois Précédent</a>
		<a href="<?=$beforeMonth?>">Mois Suivant</a>
	</caption>
    <table class="table-style">
        <thead>
            <tr>
                <th>Lundi</th>
                <th>Mardi</th>
                <th>Mercredi</th>
                <th>Jeudi</th>
                <th>vendredi</th>
                <th>Samedi</th>
                <th>Dimanche</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    
</body>
</html>