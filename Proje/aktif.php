<?php
// If you installed via composer, just use this code to require autoloader on the top of your projects.
require 'Medoo.php';
 
// Using Medoo namespace
use Medoo\Medoo;
 
$database = new Medoo([
	// required
	'database_type' => 'mysql',
	'database_name' => 'kanser',
	'server' => 'localhost',
	'username' => 'root',
	'password' => '',
 
	// [optional]
	'charset' => 'utf8',
	'collation' => 'utf8_turkish_ci',
	'port' => 3306
]);
 
$kontrol=$database->get("kullanicilar", "*", ["AND" => ["eposta" => $_GET["eposta"],"aktivasyon" => $_GET["key"]]]);
if($kontrol["id"]!=0){
	$data = $database->update("kullanicilar", ["aktif_mi" => 1],["AND" => ["eposta" => $_GET["eposta"],"aktivasyon" => $_GET["key"]]]);
	if($data>0){
		header("Location:3giris.php");
	}
}else{
	echo "aktivasyon hatalı";
}

?>