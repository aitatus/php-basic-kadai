<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="このページは14章の課題です。">
    <title>14章課題</title>
</head>

<body>
    <p>
        <?php
            function sort_2way($array, $order) {
                if ($order == true) {
                    echo '昇順にソートします。<br>';
                    sort($array, SORT_NUMERIC);
                    foreach ($array as $a) {
                        echo $a.'<br>';
                    }
                } else {
                    if ($order == false) {
                        echo '降順にソートします。<br>';
                        arsort($array, SORT_NUMERIC);
                        foreach ($array as $a) {
                            echo $a.'<br>';
                        }
                    }
                }
            }
            $array = [15, 4, 18, 23, 10];
            sort_2way($array, true);
            sort_2way($array, false);
        ?>
    </p>
</body>

</html>
