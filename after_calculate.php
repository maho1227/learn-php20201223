<?php
    function calculate_circle($radius) {
        define("PI",3.141592);
        return $radius * $radius * PI; 
    }
    $radius = $_GET["radius"]; 
    //var_dump ($radius);
    $circle_area = calculate_circle($radius);
    //var_dump($circle_area); 
?>	
<!doctype html>
    <html lang-"ja">
    <head>
        <meta charset-"UTF-8">
        <title>計算後</title>
    </head>
    <body>
        <div class-"main>
        <h2><?php echo "半径が{$radius}cmの円の面積は{$circle_area}㎠です";?></h2>
    </body>
    </html>