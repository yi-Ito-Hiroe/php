<!-- PHP課題6：連想配列でプロフィールを管理者しよう -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>q6</title>
</head>
<body>
    <?php
    $profile = [
        'name' => '山田太郎',
        'age' => '25',
        'hobby' => 'バスケ'
    ];

    foreach($profile as $key => $value){
        echo $key . "<br>";
        echo $value . "<br>";
    }
    ?>
</body>
</html>
