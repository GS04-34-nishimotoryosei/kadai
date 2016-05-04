<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>宿泊後のお掃除をマッチング</title>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="anmeru.css" media="all">
</head>

<body>
    <a href="＃"><h5><img src="folder/logo2.png"></h5></a>
<nav class="menu">
   <ul>
    <li><i class="fa fa-user"></i>
        <a href="#">クリーナーになる</a></li>
    <li><i class="fa fa-question"></i>
        <a href="#">ヘルプ</a></li>
    <li><i class="fa fa-check-square-o"></i>
        <a href="#">アカウント作成</a></li>
    <li><i class="fa fa-bars"></i>
        <a href="#">ログイン</a></li>
   </ul>
</nav>
    
<div id="main">
  <div id="contents">
      <img src="folder/hito.jpg" >
      <h3><i class="fa fa-calendar" aria-hidden="true"></i>スケジュール</h3>
      <script async name='freecals' id='calinc-mem42679-height500' type="text/javascript" src="http://freecalend.com/jstac/calinc.js"></script>
      <ul class="products">
       <li>
        <h3>クリーナー情報</h3><br>
        <bt>３０代女性</bt><br>
        <bt>クリーナー回数：３回</bt><br>
        <bt>世田谷区</bt><br>
        <i class="fa fa-trophy" aria-hidden="true"></i>
        <bt>ANMERUランク</bt>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star-o" aria-hidden="true"></i>
      </li>
 <hr>
     <h3>対応エリア</h3><br>
       <bt>世田谷区、目黒区</bt><br>
       <bt>通常清掃からリネンクリーニングまで</bt><br>
 <hr>
       <li>
        <h3>自己紹介</h3>
        <bt>お掃除が得意な２児の母です！</bt><br>
        <bt>少しでも自分の経験を社会に活かしたいと思い登録しました！</bt><bt></bt>
        <bt>まずはお気軽にご相談ください！</bt>
       </li>
      </ul>
 <hr>
<div id="kutikomi">
  <h3>レビュー</h3>
  <table>
<?php
$name = $_POST["name"];
$mail = $_POST["sweet"];
$tel  = $_POST["tel"];
    

$str = $name.",".$mail.",".$tel."\n";

$file = fopen("data/data.csv","a");
flock($file, LOCK_EX);
fputs($file,$str);
flock($file, LOCK_UN);
fclose($file);


$dataarray=[];
$fp = fopen("data/data.csv", "r");
while ($data = fgetcsv($fp, 10000)) {
    $dataarray[] = $data;
}

$dataarray_reverse = array_reverse($dataarray);

foreach ($dataarray_reverse as $data) {
//while ($data = fgetcsv($fp, 10000)) {
    print "<tr>";
  foreach ($data as $d) {
    print "<td>$d</td>";
  }
  print "</tr>\n";
}


?>
  </table>
</div>
</div>
</div>
</body>
</html>
