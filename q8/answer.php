<!-- PHP課題8：年齢に応じてメッセージを切り替えよう -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>q8</title>
</head>
<body>
    <form action="" method="POST">
        <label for="age_input">年齢:</label>
        <input type="text" id="age_input" name="user_age">
        <button type="submit">送信</button>
    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["user_age"])){
    $age = (int)$_POST["user_age"];
    if($age <20){
        echo "<P>あなたは未成年です</p>";
    }else if($age <60){
        echo "<p>あなたは大人です</p>";
    }else{
        echo "<p>あなたはシニアです</p>";
    }
}
    ?>
</body>
</html>
