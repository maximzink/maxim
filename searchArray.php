<?php
 $car = [2,4,5,6,7,21,22,23];
$citiez = ['London','Paris','Berlin', 'Moscov'];


search ($car, 23);
search ($citiez,"London");

function search ($arr, $find){

foreach ($arr as $a){
    if ($a === $find){
        echo $a. " find it";
        return true;
    }
    //echo "You dont Find";
    continue;


   }
}
