<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample01</title>
</head>
<body>
    <?php
    $db = new mysqli('127.0.0.1:8889', 'root', 'root', 'mydb');
    $db->query('drop table if exists test');
    $success = $db->query('create table test(id INT)');
    if ($success) {
    echo 'テーブルを削除して作成しました';
    } else {
        echo '正常に動作しませんでした';
    }
    ?>
</body>
</html>