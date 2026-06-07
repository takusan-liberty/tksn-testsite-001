<?php
// パスワードの設定
$password = "260607-pluteus"; // ここを好きなパスワードに変更してください

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['pass'] === $password) {
        // 成功したら test.html へリダイレクト
        header("Location: test.html");
        exit();
    } else {
        $error = "パスワードが違います。";
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<body>
    <h2>サイト閲覧パスワード</h2>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="POST">
        <input type="password" name="pass" required>
        <button type="submit">ログイン</button>
    </form>
</body>
</html>