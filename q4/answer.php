<!-- PHP課題④：配列を使ってデータを一覧表示しよう -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>q4</title>
</head>
<body>
    <?php
$array = ["りんご", "みかん", "バナナ"];
foreach ($array as $item) {
    echo $item . "<br>";
}
    ?>
</body>
</html>
