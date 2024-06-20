<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>16章課題</title>
</head>

<body>
  <p>
    <?php
    //フードのクラス作成
    class Food {
      //フードのプロパティ定義
      private $name;
      private $price;

      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }
      public function show_price() {
        echo $this->price . '<br>';
      }
    }

    //アニマルのクラス作成
    class Animal {
      //アニマルのプロパティ定義
      private $name;
      private $height;
      private $weight;

      public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
      public function show_height() {
        echo $this->height . '<br>';
      }
    }
   
    //各々のインスタンス化
    $food = new Food('potato', 250);
    $animal = new Animal('dog', 60, 5000);

    print_r($food);
    echo '<br>';
    print_r($animal);
    echo '<br>';
    $food->show_price();
    $animal->show_height();
    ?>
  </p>
</body>
</html>