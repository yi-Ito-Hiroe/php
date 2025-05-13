<!-- PHP課題9：フォームから名前を受け取ってあいさつしよう -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>q9</title>
 </head>
 <body>
    <form action="answer.php" method="POST">
        <label for="name_input">名前:</label>
        <input type="text" id="name_input" name="user_name">
        <button type="submit">送信</button>
    </form>

    <?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
    if(isset($_POST["user_name"]) && trim($_POST["user_name"]) !== ""){
$inputName = trim($_POST["user_name"]);
$safeName = htmlspecialchars($inputName, ENT_QUOTES, 'UTF-8');
echo "こんにちは" . $safeName . "さん！";
    } else{
        echo "<p>名前が入力されていません</p>";
    }
} else {
    echo "<p>フォームに名前を入力して送信してください</p>";
}
    ?>
 </body>
 </html>

