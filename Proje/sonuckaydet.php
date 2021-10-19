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


$Barkod_No="";
$Lab_uzman="";
$Alan="";
$Sonuc_tarih="";
$Sonuc1="";
$Sonuc2="";
$Sonuc3="";
$Sonuc4="";
$Sonuc5="";
$Sonuc6="";
$Sonuc7="";
$Sonuc8="";
$Sonuc9="";
$Sonuc10="";
$Sonuc11="";
$Sonuc12="";
$Sonuc13="";
$Sonuc14="";
$Sonuc15="";
$Sonuc16="";
$Sonuc17="";
$Sonuc18="";
$Sonuc19="";
$Sonuc20="";
$Sonuc21="";



if(isset($_POST['Lab_uzman'])&& isset($_POST['Sonuc_tarih']) && isset($_POST['Alan']) && isset($_POST['Barkod_No']) && isset($_POST['Sonuc1']) && isset($_POST['Sonuc2']) && isset($_POST['Sonuc3']) && isset($_POST['Sonuc4']) && isset($_POST['Sonuc5']) && isset($_POST['Sonuc6']) && isset($_POST['Sonuc7']) && isset($_POST['Sonuc8']) && isset($_POST['Sonuc9']) && isset($_POST['Sonuc10']) && isset($_POST['Sonuc11']) && isset($_POST['Sonuc12']) && isset($_POST['Sonuc13']) && isset($_POST['Sonuc14']) && isset($_POST['Sonuc15']) && isset($_POST['Sonuc16']) && isset($_POST['Sonuc17']) && isset($_POST['Sonuc18']) && isset($_POST['Sonuc19']) && isset($_POST['Sonuc20']) && isset($_POST['Sonuc21'])){


	$Barkod_No=$_POST['Barkod_No'];
	$Lab_uzman=$_POST['Lab_uzman'];
	$Alan=$_POST['Alan'];
	$Sonuc_tarih=$_POST['Sonuc_tarih'];
	$Sonuc1=$_POST['Sonuc1'];
	$Sonuc2=$_POST['Sonuc2'];
	$Sonuc3=$_POST['Sonuc3'];
	$Sonuc4=$_POST['Sonuc4'];
	$Sonuc5=$_POST['Sonuc5'];
	$Sonuc6=$_POST['Sonuc6'];
	$Sonuc7=$_POST['Sonuc7'];
	$Sonuc8=$_POST['Sonuc8'];
	$Sonuc9=$_POST['Sonuc9'];
	$Sonuc10=$_POST['Sonuc10'];
	$Sonuc11=$_POST['Sonuc11'];
	$Sonuc12=$_POST['Sonuc12'];
	$Sonuc13=$_POST['Sonuc13'];
	$Sonuc14=$_POST['Sonuc14'];
	$Sonuc15=$_POST['Sonuc15'];
	$Sonuc16=$_POST['Sonuc16'];
	$Sonuc17=$_POST['Sonuc17'];		
	$Sonuc18=$_POST['Sonuc18'];
	$Sonuc19=$_POST['Sonuc19'];
	$Sonuc20=$_POST['Sonuc20'];
	$Sonuc21=$_POST['Sonuc21'];

	
	
}else{
	header("Location:index.php");
}


$database->insert("test_sonuc", ["Lab_uzman" => $Lab_uzman,"Alan" => $Alan,"Barkod_No" => $Barkod_No,"Sonuc_tarih" => $Sonuc_tarih,"Sonuc1" => $Sonuc1,"Sonuc2"=>$Sonuc2,"Sonuc3"=>$Sonuc3,"Sonuc4"=>$Sonuc4,"Sonuc5"=>$Sonuc5,"Sonuc6"=>$Sonuc6,"Sonuc7"=>$Sonuc7,"Sonuc8" =>$Sonuc8,"Sonuc9" =>$Sonuc9,"Sonuc10" =>$Sonuc10,"Sonuc11"=>$Sonuc11,"Sonuc12" =>$Sonuc12,"Sonuc13" =>$Sonuc13,"Sonuc14" =>$Sonuc14,"Sonuc15" =>$Sonuc15,"Sonuc16" =>$Sonuc16,"Sonuc17" =>$Sonuc17,"Sonuc18" =>$Sonuc18,"Sonuc19" =>$Sonuc19,"Sonuc20" =>$Sonuc20,"Sonuc21" =>$Sonuc21]);

$sonuc_id = $database->id();
if($sonuc_id>0){
	header("Location:sonuc_girme.php");
}else{
	header("Location:index.php");
}

?>