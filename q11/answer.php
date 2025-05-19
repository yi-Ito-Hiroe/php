<!-- PHP課題11：順位付きランキングを表示しよう -->
<!DOCTYPE html>
 <html lang="ja">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>q11</title>
 </head>
 <body>
    <?php
    $score = [
        ['name' => '太郎', 'score' => 98],
        ['name' => '花子', 'score' => 95],
        ['name' => '次郎', 'score' => 75],
        ];

        usort($score, function($a, $b) {
            return $a['score'] <=> $b['score'];
        });

        $rank = 1;
        
        foreach ($score as $player) {
            echo $rank . "位: " . htmlspecialchars($player['name'], ENT_QUOTES, 'UTF-8') . " " . htmlspecialchars($player['score'], ENT_QUOTES, 'UTF-8') . "点" . "<br>";
        $rank++;
        }
        
    ?>
 </body>
 </html>
