<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>web開発第4回</title>
</head>
<body>
    <?php
    // 英語と日本語の対応を表現する連想配列
    $fruits = [
        "apple" => "りんご",
        "lemon" => "レモン",
        "grape" => "ブドウ",
        "tomato" => "トマト"
    ];

    // 英語から日本語への変換
    foreach ($fruits as $english => $japanese) {
        echo "<p>英語: $english. 日本語: $japanese</p>";
    }
    ?>
</body>
</html>

