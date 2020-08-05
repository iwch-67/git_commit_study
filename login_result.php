<?php
if (empty($_POST['name']) || empty($_POST['email'])) {
	header('Location: login.php');
} else {
	$name = $_POST['name'];
	$email = $_POST['email'];
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>ログイン結果</title>
</head>
<body>
<p>ログインユーザー：
<?php echo $name ?>
</p>
</body>
</html>
