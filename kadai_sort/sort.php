<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="このページは14章の課題です。">
    <title>14章課題</title>
    <style>
        p {
            margin: 0;
        }
    </style>
</head>

<body>
    <p>昇順にソートします。</p>
    <p>
        <?php
            $num = [15, 4, 18, 23, 10];
            sort($num, SORT_NUMERIC);
            foreach ($num as $n) {
                echo $n.'<br>';
            }
        ?>
    </p>
    <p>降順にソートします。</p>
    <p>
        <?php
            $num = [15, 4, 18, 23, 10];
            arsort($num, SORT_NUMERIC);
            foreach($num as $n) {
                echo $n.'<br>';
            }
        ?>
    </p>
</body>

</html>
