<?php
function is_leap_year($year){
    if ($year % 400 == 0) 
     return TRUE; 
     elseif ($year % 100 == 0) 
     return FALSE; 
     elseif ($year % 4 == 0) 
     return TRUE; 
     else 
     return FALSE; 
}
if( is_leap_year('2022') == TRUE )
    echo 'TRUE';
    else
    echo 'FALSE';
?>