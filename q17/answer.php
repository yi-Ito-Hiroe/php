<!-- PHP課題⑰：配列を検索して一致する要素を表示しよう -->
 <!DOCTYPE html>
 <html lang="ja">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>q17</title>
 </head>

 <body>
    <form action="" method="POST">
        <label for="keyword">キーワード：</label>
        <input type="text" id="keyword" name="input_word">
        <button type="submit">検索</button>
    </form>
    
    <?php
$items = [
    "PHP入門",
    "JavaScript実践",
    "HTML&CSS基礎",
    "実践PHP",
    "Laravelフレームワーク",
];

    if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["input_word"])){
        $keyword = $_POST["input_word"];
        $found = false; //←何で必要なのか分からない

        echo "<h3>検索結果：</h3>";

        foreach($items as $item){ //配列 $items に入ってる要素を1個ずつ $item に取り出して処理していく
            if($keyword !=="" && str_contains($item, $keyword)){ //もし $item の中に $keyword（検索キーワード）が含まれてたら
                echo "<p>" . htmlspecialchars($item, ENT_QUOTES, 'UTF-8') . "</p>";
                $found = true;
            }
        }

        if(!$found){
            echo "<p>該当するデータはありませんでした。</p>";
        }
    }
    ?>
 </body>
 </html>
