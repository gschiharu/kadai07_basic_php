<?php
// POSTデータの取得とサニタイズ
$name = htmlspecialchars(trim($_POST['name']), ENT_QUOTES, 'UTF-8');
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
$memo = htmlspecialchars(trim($_POST['memo']), ENT_QUOTES, 'UTF-8');

// CSV形式のデータ作成
$c = ",";
$str = $name . $c . $email . $c . $memo . "\n";

// ファイルに書き込み (data.csv)
$file = fopen("data.csv", "a");  // ファイルを追記モードで開く
if ($file) {
    fwrite($file, $str);
    fclose($file);
    // 正常に書き込まれたらリダイレクト
    header("Location: index.php?status=success");
    exit;
} else {
    // エラーハンドリング
    echo "Error: Unable to write to file.";
}
?>
