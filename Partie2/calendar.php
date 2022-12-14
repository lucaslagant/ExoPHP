<?php
// $dayNumber = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);
$month = array( "Janvier","Février", "Mars","Avril","Mai", "Juin","Juillet", "Août","Septembre","Octobre","Novembre","Décembre");
$day = array("Lundi","Mardi","Mercredi","Jeudi", "Vendredi", "Samedi", "Dimanche");

$numMonth = intval(date('n', $timestamp = null));
// var_dump($numMonth);


// Gestion du mois précédent et du mois suivant
if ($numMonth == 12) {
    $beforeMonth = $numMonth - 2;
    $afterMonth = 0; 
}
elseif ($numMonth == 0) {
    $beforeMonth = 11;
    $afterMonth = $numMonth + 1;
}
else{
    $beforeMonth = $numMonth - 1;
    $afterMonth = $numMonth + 1;
}
// var_dump($afterMonth);
// var_dump($beforeMonth);

// Tableau avec son index
if ($numMonth == 1) {
   $numMonth = $month[0];
}
elseif ($numMonth == 2) {
    $numMonth = $month[1];
}
elseif ($numMonth == 3) {
    $numMonth = $month[2];
}
elseif ($numMonth == 4) {
    $numMonth = $month[3];
}
elseif ($numMonth == 5) {
    $numMonth = $month[4];
}
elseif ($numMonth == 6) {
    $numMonth = $month[5];
}
elseif ($numMonth == 7) {
    $numMonth = $month[6];
}
elseif ($numMonth == 8) {
    $numMonth = $month[7];
}
elseif ($numMonth == 9) {
    $numMonth = $month[8];
}
elseif ($numMonth == 10) {
    $numMonth = $month[9];
}
elseif ($numMonth == 11) {
    $numMonth = $month[10];
}
elseif ($numMonth == 12) {
    $numMonth = $month[11];
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
    <div class="place">
        <a href="<?='/Partie2/calendar.php/'.$beforeMonth?>" style="--clr:#66CDAA"><span>Mois Précédent</span></a>
        <h1><?=$numMonth?></h1>
        <a href="<?='/Partie2/calendar.php/'.$afterMonth?>" style="--clr:#66CDAA"><span>Mois Suivant</span></a>		
    </div>
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
                <td>1</td>
                <td>2</td>
            </tr>
            <tr>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
                <td>8</td>
                <td>9</td>
            </tr>
            <tr>
                <td>10</td>
                <td>11</td>
                <td>12</td>
                <td>13</td>
                <td>14</td>
                <td>15</td>
                <td>16</td>
            </tr>
            <tr>
                <td>17</td>
                <td>18</td>
                <td>19</td>
                <td>20</td>
                <td>21</td>
                <td>22</td>
                <td>23</td>
            </tr>
            <tr>
                <td>24</td>
                <td>25</td>
                <td>26</td>
                <td>27</td>
                <td>28</td>
                <td>29</td>
                <td>30</td>
            </tr>
            <tr>
                <td>31</td>
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