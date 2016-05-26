<!DOCTYPE html>
 <html>
  <meta charset="UTF-8">
  <head>
    <title>ログインユーザー追加ページ</title>
  </head>
  <body>
<?php
require 'password.php';
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('接続失敗です。'.mysql_error());
}

$db_selected = mysql_select_db('anmeru', $link);
if (!$db_selected){
    die('データベース選択失敗です。'.mysql_error());
}

mysql_set_charset('utf8');

$result = mysql_query('SELECT mail,password FROM test');
if (!$result) {
    die('SELECTクエリーが失敗しました。'.mysql_error());
}

$mail = $_POST['mail'];
$password = $_POST['password'];
$hashpass = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO test (mail, password) VALUES ('$mail','$hashpass')";
$result_flag = mysql_query($sql);

if (!$result_flag) {
    die('INSERTクエリーが失敗しました。すでに同じ、メールアドレスが登録されている可能性があります。<br><a href="add.html">戻る</a>');
}

print('<p>ユーザーを登録しました。</p>');

$close_flag = mysql_close($link);

?>
      <a href="index.php">戻る</a>
  </body>
</html>