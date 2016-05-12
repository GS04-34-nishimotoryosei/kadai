<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>宿泊後のお掃除をマッチング</title>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Seymour+One' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="form.css" media="all">
<title>ログインユーザ追加用の入力画面</title>
  </head>
  <body>
      
      <div class="toroku-waku">
      <div class="toroku-migi">
          <h1>新規登録</h1>
    <form action="insert.php" method="post">
      <table>
        <tr>
          <td>メールアドレス(ID)</td>
          <td><input type="text" name="mail"></td>
        </tr>
        <tr>
          <td>パスワード</td>
          <td><input type="text" name="password"></td>
        </tr>
      </table>
        <input type="submit"><br>
      <a href="login.php">ログインページへ</a>
    </form>
          </div>
          <div class="toroku-hidari">
              <h1>Facebookアカウントで新規登録</h1>
              <p>Facebookアカウントを使ってスペースマーケットにログインできます。ログイン以外の目的に使われることはありません。利用規約をお読みになり同意の上、登録へお進み下さい。</p>
              <h1><i class="fa fa-facebook-square" aria-hidden="true"></i></h1>
          </div>
      </div>
      <div style="margin-top: 10px;">
      
    </div>
  </body>
</html>