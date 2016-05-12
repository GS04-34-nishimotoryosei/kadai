<?php
 
function db_connect(){
	$dsn = 'mysql:host=mysql529.db.sakura.ne.jp;dbname=anmru_test;charset=utf8';
	$user = 'anmru';
	$password = 'kiwami0515';
	
	try{
		$dbh = new PDO($dsn, $user, $password);
		return $dbh;
	}catch (PDOException $e){
	    	print('Error:'.$e->getMessage());
	    	die();
	}
}
 
?>