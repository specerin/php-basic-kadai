<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
       <?php
       // 連想配列
       $onion_data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道' ];

       // foreach分を使ってキーと値を順番に取り出す
       foreach ($onion_data as $key => $value) {
       // キー：値　の形式で出力
           echo $key . '：' . $value . "<br>";
       }
       ?>
   </p>
</body>

</html>