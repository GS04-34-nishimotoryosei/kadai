<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>宿泊後のお掃除をマッチング</title>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
<meta charset="utf-8">
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Seymour+One' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="anmeru1.css" media="all">
</head>
<body>
   <a href="index.html"><h2><img src="logo2.png"></h2></a>
<nav class="menu">
   <ul>
    <li><i class="fa fa-user"></i>
        <a href="map.html">クリーナーになる</a></li>
    <li><i class="fa fa-question"></i>
        <a href="#">ヘルプ</a></li>
    <li><i class="fa fa-check-square-o"></i>
        <a href="form.php">新規登録</a></li>
    <li><i class="fa fa-bars"></i>
        <a href="login.php">ログイン</a></li>
   </ul>
</nav>
<span id="slide">
<i class="fa fa-hand-o-right" aria-hidden="true">
デモ利用方法</i>
</span>
<p id="target" style="display: none;">
<!--
    １、。<br>
    ２、マップに経堂が表示されます。<br>
    ３、一番近くの<img src="icon.png">をクリックしてください。<br>
    ４、名前が表示されますので、クリックすると詳細ページに行きます。</p>
-->
<h1>次のゲストのために！</h1>
<p>オーナーとハウスクリーナーをマッチング</p>

<div id="kensaku">
    <input id="address" type="textbox" placeholder="お掃除してほしい日を入力してください。" required>
    <input id="submit" type="button" value="探す">
</div>
<!--<div id="map"></div>-->

<script>
$('#slide').click(function(){
    if ($('#target').css('display') == 'none') {
$('#target').slideDown('slow');
} else {
$('#target').slideUp('fast');
}
});

//urrentWindow = null;
//function initMap() {
//
//  var map = new google.maps.Map(document.getElementById('map'), {
//    zoom: 15,
//    center: {lat: 35.696932, lng: 139.765432}
//  });
//    var markers = [
//   ['<a href="map.html">西元　良成',35.651191,139.633346],
//   ['田中　A子',35.641845,139.653346],
//   ['吉田　B子',35.692132,139.693346],
//   ['斎藤　C子',35.653191,139.663387],
//   ['田辺　D子',35.651789,139.603676]
//   ];
//  for (var i = 0; i < markers.length; i++) {
//       var name = markers[i][0];
//       var latlng = new google.maps.LatLng(markers[i][1],markers[i][2]);
//       var icons = 'icon2.png';
//       createMarker(name,latlng,map);
//}
//
//function createMarker(name,latlng,map){
//       var infoWindow = new google.maps.InfoWindow();
//       var marker = new google.maps.Marker({position: latlng,icon:icons,map: map});
//       google.maps.event.addListener(marker, 'click', function() {
//       if (currentWindow) {
//       currentWindow.close();
//      }
//       infoWindow.setContent(name);
//       infoWindow.open(map,marker);
//       currentWindow = infoWindow;
//});
//}
//   
//    
//  var geocoder = new google.maps.Geocoder();
//
//  document.getElementById('submit').addEventListener('click', function() {
//    geocodeAddress(geocoder, map);
//  });
//}
//    
//function geocodeAddress(geocoder, resultsMap) {
//  var address = document.getElementById('address').value;
//  geocoder.geocode({'address': address}, function(results, status) {
//  if (status === google.maps.GeocoderStatus.OK) {
//  resultsMap.setCenter(results[0].geometry.location);
//  var marker = new google.maps.Marker({
//  map: resultsMap,
//  position: results[0].geometry.location
//});
//} else {
//  alert('住所を入力してください。' );
//}
//});
//}
    
</script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgEKMnoPbU06cRdTjrI8X_glKV00swaVs&signed_in=true&callback=initMap"
async defer></script>

</body>
</html>
