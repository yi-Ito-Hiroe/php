<!-- PHP課題⑯：2次元配列で書籍一覧を表示しよう -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>q16</title>
</head>
<body>
    
<?php
$books = [
    [ 
        'title' => 'PHP入門',
        'price' => '2400',
        'author' => '山田太郎'
    ]
    ];

    foreach($books as $book){
        echo "書籍名：{$book['title']}/価格：{$book['price']}/著者：{$book['author']}<br>";
    }

?>
</body>
</html>
