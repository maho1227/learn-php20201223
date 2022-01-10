<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>円の面積計算プログラム</title>
</head>
<script src="calc.js"></script>
<body>
    <div class-"main>
    <h1>円の面積計算プログラム</h1>
    <h2>半径を入力してください。(円周率は3.14で統一しています)</h2>
        <form action="after_calculate.php" method="post" name ="radius">
            <lavel for="radius">半径</lavel>
            <input type ="text" id ="radius" name = "radius">
            <lavel for="length">cm</lavel>
            <input type = "submit" id ="calculate" name = "calculate" value ="計算する" onClick="return check();"><br>
        </form>
    </div>
</body>
</html> 