<!-- PHP課題5：関数を作って処理をまとめよう -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="name_input">namae:</label>
        <input type="text" id="name_input" name="user_name">
        <button type="submit">送信</button>
    </form>

    <?php
    function sayHello(string $name): void {
        echo "こんにちは、 $name さん";
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        if(isset($_POST["user_name"]) && trim($_POST["user_name"]) !== "") {
            $inputName = trim($_POST["user_name"]);
            sayHello($inputName);
        } else {
            echo "<p>名前が入力されていません</p>";
        }
    }
    ?>
</body>
</html>

