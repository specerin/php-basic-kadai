<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        //引数を指定
        function sort_2way ($array , $order) {
            //if文を書く
            if ($order) {
                echo '昇順にソートします。<br>';
                sort ($array);
            } else {
                echo '降順にソートします。<br>';
                rsort ($array);
            }
        
            //foreachで出力する
            foreach ($array as $element) {
                echo $element . '<br>';
            }
        }
        
        //ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];

        //独自のソート関数を呼び出す
        sort_2way ($nums , TRUE);
        sort_2way ($nums , FALSE);
        ?>
    </p>
</body>

</html>