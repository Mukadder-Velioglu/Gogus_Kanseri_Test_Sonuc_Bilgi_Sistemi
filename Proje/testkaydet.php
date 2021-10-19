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

$TC_No="";
$Doktor="";
$istenen_tarih="";
$Poliklinik="";
$Test_Adi1="";
$Test_Adi2="";
$Test_Adi3="";
$Test_Adi4="";
$Test_Adi5="";
$Test_Adi6="";
$Test_Adi7="";
$Test_Adi8="";
$Test_Adi9="";
$Test_Adi10="";
$Test_Adi11="";
$Test_Adi12="";
$Test_Adi13="";
$Test_Adi14="";
$Test_Adi15="";
$Test_Adi16="";
$Test_Adi17="";
$Test_Adi18="";
$Test_Adi19="";
$Test_Adi20="";
$Test_Adi21="";

if(isset($_POST['TC_No']) && isset($_POST['Doktor']) && isset($_POST['istenen_tarih']) && isset($_POST['Poliklinik'])&& isset($_POST['Test_Adi1']) && isset($_POST['Test_Adi2']) && isset($_POST['Test_Adi3']) && isset($_POST['Test_Adi4']) && isset($_POST['Test_Adi5']) && isset($_POST['Test_Adi6']) && isset($_POST['Test_Adi7']) && isset($_POST['Test_Adi8']) && isset($_POST['Test_Adi9']) && isset($_POST['Test_Adi10']) && isset($_POST['Test_Adi11']) && isset($_POST['Test_Adi12']) && isset($_POST['Test_Adi13']) && isset($_POST['Test_Adi14']) && isset($_POST['Test_Adi15']) && isset($_POST['Test_Adi16']) && isset($_POST['Test_Adi17']) && isset($_POST['Test_Adi18']) && isset($_POST['Test_Adi19']) && isset($_POST['Test_Adi20']) && isset($_POST['Test_Adi21'])){

	$TC_No=$_POST['TC_No'];
	$Doktor=$_POST['Doktor'];
	$istenen_tarih=$_POST['istenen_tarih'];
	$Poliklinik=$_POST['Poliklinik'];
	$Test_Adi1=$_POST['Test_Adi1'];
	$Test_Adi2=$_POST['Test_Adi2'];
	$Test_Adi3=$_POST['Test_Adi3'];
	$Test_Adi4=$_POST['Test_Adi4'];
	$Test_Adi5=$_POST['Test_Adi5'];
	$Test_Adi6=$_POST['Test_Adi6'];
	$Test_Adi7=$_POST['Test_Adi7'];
	$Test_Adi8=$_POST['Test_Adi8'];
	$Test_Adi9=$_POST['Test_Adi9'];
	$Test_Adi10=$_POST['Test_Adi10'];
	$Test_Adi11=$_POST['Test_Adi11'];
	$Test_Adi12=$_POST['Test_Adi12'];
	$Test_Adi13=$_POST['Test_Adi13'];
	$Test_Adi14=$_POST['Test_Adi14'];
	$Test_Adi15=$_POST['Test_Adi15'];
	$Test_Adi16=$_POST['Test_Adi16'];
	$Test_Adi17=$_POST['Test_Adi17'];
	$Test_Adi18=$_POST['Test_Adi18'];
	$Test_Adi19=$_POST['Test_Adi19'];
	$Test_Adi20=$_POST['Test_Adi20'];
	$Test_Adi21=$_POST['Test_Adi21'];
	
}else{
	header("Location:index.php");
}


$database->insert("tetkik", ["TC_No" => $TC_No,"Doktor" => $Doktor,"istenen_tarih" => $istenen_tarih,"Poliklinik" => $Poliklinik,"Test_Adi1"=>$Test_Adi1,"Test_Adi2"=>$Test_Adi2,"Test_Adi3"=>$Test_Adi3,"Test_Adi4"=>$Test_Adi4,"Test_Adi5"=>$Test_Adi5,"Test_Adi6"=>$Test_Adi6,"Test_Adi7" =>$Test_Adi7,"Test_Adi8" =>$Test_Adi8,"Test_Adi9" =>$Test_Adi9,"Test_Adi10"=>$Test_Adi10,"Test_Adi11" =>$Test_Adi11,"Test_Adi12" =>$Test_Adi12,"Test_Adi13" =>$Test_Adi13,"Test_Adi14" =>$Test_Adi14,"Test_Adi15" =>$Test_Adi15,"Test_Adi16" =>$Test_Adi16,"Test_Adi17" =>$Test_Adi17,"Test_Adi18" =>$Test_Adi18,"Test_Adi19" =>$Test_Adi19,"Test_Adi20" =>$Test_Adi20,"Test_Adi21" =>$Test_Adi21]);

$test_id = $database->id();
if($test_id>0){
	header("Location:testisteme1.php");
}else{
	header("Location:index.php");
}

?>