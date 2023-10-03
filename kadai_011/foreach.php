<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="このページは11章の課題です。">
    <title>11章課題</title>
</head>
<body>
    <p>
        <?php
            $array = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];
            foreach($array as $key => $value) {
                echo "{$key}:{$value}<br>";
            }
        ?>
    </p>
</body>    

</html>