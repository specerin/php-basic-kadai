<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
       <?php
       // クラスを定義する
       class Food {
           // プロパティを定義する
           private $name;
           private $price;

           // メソッドを定義する
           public function __construct($name, $price) {
               $this->name = $name;
               $this->price = $price;
           }

           public function show_price() {
                echo $this->price . '<br>';
           }
       }

       // クラスを定義する
       class Animal {
           // プロパティを定義する
           private $name;
           private $height;
           private $weight;

                      // メソッドを定義する
           public function __construct($name, $height, $weight) {
               $this->name = $name;
               $this->height = $height;
               $this->weight = $weight;
           }
           public function show_height() {
                echo $this->height . '<br>';
           }
       }
      
       // インスタンス化する
       $potato = new Food("potato", 250);
       $dog = new Animal("dog", 60, 5000);


       // print_r 関数で出力する
       print_r($potato);
       echo '<br>';
       print_r($dog);
       echo '<br>';


       // 値を出力する
       $potato->show_price();
       $dog->show_height();

       ?>
   </p>
</body>

</html>