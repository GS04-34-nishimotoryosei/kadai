<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>POSTデータ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ユーザー情報登録</legend>
     <label>名前<br>
     <input type="text" name="name" placeholder="例）山崎大輔" required></label><br>
     <label>メールアドレス<br>
     <input type="email" name="email" placeholder="例）test@test" required></label><br>
     <label>年齢<br>
     <input type="text" name="age" placeholder="例）40" required></label><br>
     <label>自己紹介<br>
     <textArea name="naiyou" rows="4" cols="40" placeholder="例）" required></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
