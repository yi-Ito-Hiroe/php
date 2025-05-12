<!-- PHP課題7：ランダムでじゃんけん勝負を作ろう -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>q7</title>
</head>
<body>
    <form action="" method="GET">
        <button type="submit">もう一回</button>
    </form>

    <?php
$hand = ["グー", "チョキ", "パー"];
$randomIndex = mt_rand(0, count($hand) - 1);
$myHand = $hand[$randomIndex];
echo "あなたの手は" . $myHand . "です" ;
    ?>
</body>
</html>

