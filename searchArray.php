<?php
 $car = [2,4,5,6,7,21,22,23];
$citiez = ['London','Paris','Berlin', 'Moscov'];


search ($car, 5);

 function search ($arr, $find){

foreach ($arr as $a){


    if ($a == $find){

        return true;
        echo "You find it";
    break;
    }
    return false;
    echo "You dont Find";
}



 }

