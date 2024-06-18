<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    // ソートする配列の宣言
    $nums = [15, 4, 18, 23, 10];

    function sort_2way(&$array, $order) {
      if ($order === true) {
        // 昇順にソート
        sort($array);
      } elseif ($order === false) {
        // 降順にソート
        rsort($array);
      }
    }

    // 昇順にソート実行
    sort_2way($nums, true);
    echo '昇順にソートします。<br>';
    foreach ($nums as $num) {
    echo $num . '<br>';
    }

    // 降順にソート実行
    sort_2way($nums, false);
    echo '降順にソートします。<br>';
    foreach ($nums as $num) {
    echo $num . '<br>';
    }
    ?>
  </p>
</body>
</html>