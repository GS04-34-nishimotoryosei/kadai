<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>宿泊後のお掃除をマッチング</title>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Seymour+One' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="anmeru.css" media="all">
</head>

<body>
    <a href="index.html"><h5><img src="folder/logo2.png" width="500px"></h5></a>
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
    
<div id="content">
    
    <h2> a</h2>
    <h1>ご感想をお聞かせください。</h1>
    <form method="post" action="kakka2.php">
         <p>日付:<input type="date" name="name" ></p>
         <p>評価:<select id="sweet" name="sweet" >
		<option value="">▼お選びください</option>
		<option value="★★★★★">★★★★★（5）</option>
		<option value="★★★★☆">★★★★☆（4）</option>
		<option value="★★★☆☆">★★★☆☆（3）</option>
		<option value="★★☆☆☆">★★☆☆☆（2）</option>
	        <option value="★☆☆☆☆">★☆☆☆☆（1）</option>
		</select>
         <p>コメント:<textarea name="tel" rows="4" cols="40"></textarea></p> 
<!--         <p>コメント:<input type="text" name="tel" ></p>-->
         <p><button class="button8" type="submit">送信</button></p>
    </form>
</div>
</body>
</html>
