<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>kadai_011</title>
</head>

<body>
    <p>
        <?php
        $vegetables_data = ['名前' => '玉ねぎ', '値段' => '200', '産地' => '北海道'];

        foreach ($vegetables_data as $key => $value) {
            echo "{$key} : {$value}<br>";
        }
        ?>
        </p>
    </body>

    </html>