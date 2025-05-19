<!-- PHP課題⑫：現在の日付と時刻を出力しよう -->
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>q12</title>
</head>
<body>
<?php
date_default_timezone_set('Asia/Tokyo');

$dayOfWeek = ["日", "月", "火", "水", "木", "金", "土"];
$time = date("Y年m月d日") . " (" . $dayOfWeek[date("w")] . "曜日)" . date("H:i");
echo "現在の日時：" . $time;
?>
</body>
</html>
