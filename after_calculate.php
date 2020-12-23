<?php
    function calculate_circle($radius) {
        define("PI",3.141592);
        return $radius * $radius * PI; 
    }
    $radius = $_GET["radius"]; 
    //var_dump ($radius);
    $circle_area = calculate_circle($radius);
    echo "半径が{$radius}cmの円の面積は{$circle_area}㎠です";
    echo nl2br("\n");
    //var_dump($circle_area); 
?>	
