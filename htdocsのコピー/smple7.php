<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>web開発第4回</title>
</head>
<body>
    <?php
    $weekday = date('w'); 
    $week = ['日', '月', '火','水','木', '金', '土'];
    echo '今日は、' . $week[$weekday] . '曜日です';
    ?>
</body>
</html>


