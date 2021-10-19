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
if (!isset($_SESSION['id'])) {
	header("");
}

?>

<!doctype html>
<html lang="tr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Sonuç Listele</title>
  </head>
<style>

@import url('https://fonts.googleapis.com/css?family=Oswald&display=swap' rel='stylesheet');

html,body{
background-image:url('bfon.jpg');
background-size: cover;
background-repeat: no-repeat;
background-attachment: fixed;
background-position: center; 
height: 100%;
font-family: 'Oswald', sans-serif;
}

.container{
height: 100%;
align-content: center;
}

.card{
height: 350px;
margin-top: auto;
margin-bottom: auto;
width: 1349px;
background-color: rgba(245,245,245) !important;
}

.card-header h4{
color: #708090;
margin-top:10px;
font-weight: bold;
}



.btn{
	margin-top:10px;
}

.baslik{
	color:white;
	text-align:center;

}

.div{
	background-color:grey;
	margin:auto;
	margin-top:-20px;
}

.div1{
	background-color:grey;
	margin:auto;
	margin-top:5px;
}


#btn1{
	margin-top:0px;
	margin-left:-15px;
	height:32px;
}

.div2{
	background-color:grey;

}

.my-custom-scrollbar {
	position: relative;
	height: 610px;
	overflow: auto;
}
.table-wrapper-scroll-y {
	display: block;
}

#kriter{
	margin:auto;
	margin-top:10px;
}


#input{
	height:32px;
}


#sekme{
	float:right;
	margin-top:-20px;
}

#nav{
	background-color:white;
	height:60px;
	
}

#logo1{
	margin-top:0px;
	float:rigth;
}

#lab{
	
	height:35px;
	background-color:white;
	color:black;
	margin-top:5px;
}



</style>
<body>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	
<nav class="navbar navbar-expand-lg navbar-white bg-white" id="nav">
<a class="nav-link active" href="index.php"><img id="logo" src="blogo.png" alt="Smiley face" height="57" width="57"></a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item active">
        <a class="nav-link" id="lab" href="testisteme1.php">TEST İSTEME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" id="lab" href="sonuc_listeleme.php">TEST SONUCU LİSTELE <span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" id="lab" href="barkod_listele.php">HASTA SORGULAMA <span class="sr-only">(current)</span></a>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a href="doktorcikis_yap.php"><button class="btn btn-danger my-2 my-sm-0" type="button">Çıkış Yap</button></a>
    </form>
  </div>
</nav>

<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<center><h5>HASTA SORGULAMA</h5></center>
			</div>
			<div class="card-body">
			<form action="barkod_listele.php" method="POST">	

				<div class="div1">
				  <h6 class="baslik">ARAMA</h6>
				</div>
				
				
				<div class="form-row" id="yer">
					<div class="input-group col-sm-3">
					  <input id="input"  type="text" name="TC_No" class="form-control" placeholder="TC Kimlik Numara">
					  <div id="input"  class="input-group col-sm-3">
						<button id="btn1" class="btn btn-info" type="submit">Ara</button> 
					  </div>
					</div>
									
					
				<?php
					$TC_No=0;


					if(isset($_POST['TC_No'])){
						$TC_No=$_POST['TC_No'];


				
					}
					
					$sonuc_cek=$database->get("tetkik","*",["TC_No"=>$TC_No]);	



					
				?>
				
				
				
				</div>
				
					<div class="div1">
					  <h6 class="baslik">GENEL BİLGİ</h6>
					</div>
				
					<div class="table-wrapper-scroll-y my-custom-scrollbar">

					  <table class="table table-bordered table-striped mb-0">
						<thead>
						  <tr>
							<th>Barkod No</th>
							<th>TC Kimlik No</th>
							<th>Poliklinik</th>
							<th>İlgili Doktor</th>
							<th>İstenen Tarih</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td><?php if(isset($_POST['TC_No'])){echo $sonuc_cek["Barkod_No"];}?></td>
							<td><?php if(isset($_POST['TC_No'])){echo $sonuc_cek["TC_No"];}?></td>
							<td><?php if(isset($_POST['TC_No'])){echo $sonuc_cek["Poliklinik"];}?></td>
							<td><?php if(isset($_POST['TC_No'])){echo $sonuc_cek["Doktor"];}?></td>
							<td><?php if(isset($_POST['TC_No'])){echo $sonuc_cek["istenen_tarih"];}?></td>
						  </tr>
						</tbody>
					  </table>
					</div>
												
				</form>

			</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
