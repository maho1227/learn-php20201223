<?php
    //円周率を3.14に設定
    define("PI",3.14);
    //POST値radiusを取得し、int型にキャスト
    $radius = (int) $_POST["radius"];
    
    //POST値radiusを元に円の面積を計算する関数
    function calculate_circle($radius) {   
        return $radius * $radius * PI; 
    }
    $circle_area = calculate_circle($radius); 
?>	
<!doctype html>
    <html lang-"ja">
    <head>
        <meta charset-"UTF-8">
        <title>計算後</title>
    </head>
    <body>
        <div class-"main">
        <h1>円の面積計算プログラム</h1>
        <h2><?php echo "半径が{$radius}cmの円の面積は{$circle_area}㎠です";?></h2>    
    </body>
    </html>