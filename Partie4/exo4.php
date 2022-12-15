<?php
$day = 32;
$month = 17;
$year = 2019;

if ($day >= 31 && $month >= 12) {
    echo 'False';
}else {
    echo $day.'/'.$month.'/'.$year;
}


?>