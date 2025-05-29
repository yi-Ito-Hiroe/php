<!-- PHP課題⑲：プリペアドステートメントで安全な検索処理を作ろう -->
 <!DOCTYPE html>
 <html lang="ja">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>q19</title>
 </head>
 <body>
    <form action="" method="GET">
        <label for="keyword">キーワード</label>
        <input type="text" id="keyword" name="keyword" value="<?php echo isset($_GET['keyword']) ?  htmlspecialchars($_GET['keyword'], ENT_QUOTES, 'UTF-8') : ''; ?>">
        <button type="submit">検索</button>
    </form>  
    
    <?php
 // xammp環境でのPDO接続設定
 $db_host = 'localhost';
 $db_name = 'bookshop1';
 $db_user = 'root';
 $db_pass = '';
 $db_charset = 'utf8mb4';

 //(Data Source Name) の設定[どのデータベースに、どのドライバで接続するかを指定する文字列]
 $dsn = "mysql:host={$db_host};dbname={$db_name};charset={$db_charset}";

 // PDO接続オプション['エラー発生時に例外をスロー', '結果を連想配列として取得', 'プリペアドステートメントのエミュレーションを無効']
$options = [
 PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
 PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
 PDO::ATTR_EMULATE_PREPARES   => false,
];

if(isset($_GET['keyword'])){
    $keyword = trim($_GET['keyword']);
    $safeKeyword = htmlspecialchars($keyword, ENT_QUOTES, 'UTF-8');

    echo "<p>検索キーワード：" . $safeKeyword . "</p>";

    if($keyword !== ''){
        try {
            $pdo = new PDO($dsn, $db_user, $db_pass, $options);

            $sql = "SELECT b.title, a.name AS author_name
                    FROM books AS b
                    LEFT JOIN authors AS a ON b.author_id = a.id
                    WHERE b.title LIKE :keyword";

                    $stmt = $pdo->prepare($sql); //プリペアドステートメントを作成
                    $search_param = "%" . $keyword . "%";
                    $stmt->bindParam(':keyword', $search_param, PDO::PARAM_STR);
                    $stmt->execute(); //プリペアードステートメントを実行

            if($stmt->rowCount() > 0) {
                echo "<p>見つかった書籍</p>";
                echo "<ul>";
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    $title = htmlspecialchars($row['title'], ENT_QUOTES, 'UTF-8');
    $author_display = "";
    if(isset($row['author_name']) && $row['author_name'] !== null){
        $author_display = " (著:" . htmlspecialchars($row['author_name'], ENT_QUOTES, 'UTF-8') . ")";
    }
    echo "<li>" . $title . $author_display . "</li>";
}
echo "</ul>";
            }else{
                echo "<p> (" . $safeKeyword . ")に一致する書籍は見つかりませんでした</p>";
            }
        }catch (PDOException $e){
            echo "<p>データベースエラー: " . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8') . "</p>";
        }finally{
            $pdo = null;
        }
    }else{
        echo "<p>キーワード入力してください。</p>";
    }
}else{
    echo "<p>検索キーワードを入力して検索ボタンを押してください。</p>";
}

    ?>
 </body>
 </html>
