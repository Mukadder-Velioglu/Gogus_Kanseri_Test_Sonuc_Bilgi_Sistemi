<?php
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

session_start();
$eposta="";
$sifre="";
///////////////////////////////////////////////Beni hatırla
if(!empty($_POST["beni_hatirla"])) {
	setcookie ("eposta",$_POST["eposta"],time()+ 3600);
	setcookie ("sifre",$_POST["sifre"],time()+ 3600);

} else {
	setcookie("eposta","");
	setcookie("sifre","");
	
}


$eposta="";
$sifre="";

if(isset($_POST['eposta']) and isset($_POST['sifre'])){
	$eposta=$_POST['eposta'];
	$sifre=$_POST['sifre'];

	$kullanici=$database->get("kullanicilar","*",["AND"=>["eposta"=>$eposta,"sifre"=>$sifre, "gorev"=>["Doktor"]]]);

	if($kullanici["id"]>0){
		$_SESSION["id"]=$kullanici["id"];
		header("Location:doktorekran.php");
	}else{
		header("Location:doktor.php?mesaj=hata2");
	}
}else{
	header("Location:doktor.php?mesaj=hata1");
}
