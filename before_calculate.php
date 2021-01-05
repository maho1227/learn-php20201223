<!doctype html>
    <html lang-"ja">
    <head>
        <meta charset-"UTF-8">
        <title>円の面積計算プログラム</title>
        <script type="text/javascript">
            function check() {
                let val = document.getElementById('radius');
                if (radius.radius.value =="") {
                    alert("※半径を入力してください。");
                    return false;
                }else if (radius.radius.value.match(/[^0-9]+/)) {
                    alert("半角数字で入力してください。");
                    return false;
                }   
                    return true;
                }
        </script>
    </head>
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