<?php
    function calculate_after_tax_rate($before_tax_rate) {
        $before_tax_rate = $_GET["before_tax_rate"];
        define("TAXRATE",1.10);
        return $before_tax_rate * TAXRATE; 
    } 
    //var_dump ($tax);
    $before_tax_rate = $_GET["before_tax_rate"]; 
    $after_tax_rate = calculate_after_tax_rate($before_tax_rate);
    $round_up = round($after_tax_rate);
    //var_dump($tax); 
?>	
<!doctype html>
    <html lang-"ja">
    <head>
        <meta charset-"UTF-8">
        <title>計算後</title>
    </head>
    <body>
        <div class-"main>
        <h2><?php echo "{$before_tax_rate}円は消費税込みで{$round_up}円です";?></h2>