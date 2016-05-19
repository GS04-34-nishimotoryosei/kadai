<?php
//1.POSTでParamを取得
$name   = $_POST["name"];
$email  = $_POST["email"];
$age  = $_POST["age"];
$naiyou = $_POST["naiyou"];
$id = $_GET["id"];

//2. DB接続します(エラー処理追加)
try {
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}




$update = $pdo->prepare("DELETE FROM gs_an_table  name=:name, email=:email, age=:age, naiyou=:naiyou WHERE id=:id");
 
$update ->bindValue(':name',$name);
$update ->bindValue(':email',$email);
$update ->bindValue(':age',$age);
$update ->bindValue(':naiyou', $naiyou);
$update ->bindValue(':id', $id); //WHERE id=変更するidを指定
//SQL実行
$flag = $update ->execute();

//3.UPDATE gs_an_table SET ....; で更新(bindValue)
//　基本的にinsert.phpの処理の流れです。

if($flag==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}else{
  //５．index.phpへリダイレクト
  header("Location: index.php");
  exit;
}


?>
