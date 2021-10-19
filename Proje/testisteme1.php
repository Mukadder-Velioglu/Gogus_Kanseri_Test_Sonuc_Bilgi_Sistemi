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
?>

<!doctype html>
<html lang="tr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Tetkik İsteme</title>
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
height: 670px;
margin-top: auto;
margin-bottom: auto;
width: 1200px;
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
	margin-top:-25px;

}

.baslik1{
	color:white;
	text-align:center;
	margin-top:5px;

}


.baslik2{
	color:white;
	text-align:center;
	margin-top:3px;

}

.div{
	background-color:grey;
	margin:auto;

}

.div1{
	background-color:grey;
	margin:auto;

}


#btn1{
	margin-top:0px;
	margin-left:-15px;
	height:32px;
}

.div2{
	background-color:grey;

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

#uyarı{
	margin-bottom:-50px;
	margin-top:10px;
	height:45px;
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
				<center><h5>TETKİK İSTEME</h5></center>
			</div>
			<form action="testkaydet.php" method="POST">
			<div class="card-body">
				
				<div class="div1">
				  <h6 class="baslik">HASTA BİLGİLERİ</h6>
				</div>

					<center><div class="col-sm-3 ">
						<input id="input" type="text" name="TC_No" class="form-control" placeholder="TC No" required></input>
					</div></center>
					
				<div class="div">
				  <h6 class="baslik1">DOKTOR BİLGİLERİ</h6>
				</div>
				
				<form>
				  <div class="form-row">
					<div class="col-sm-4 ">
					  <input id="input" type="text" name="Doktor" class="form-control" placeholder="Ad Soyad" required>
					</div>
				 <div class="col-sm-4 ">
					  <select id="input" name="Poliklinik" class="custom-select mr-sm-2" id="inlineFormCustomSelect" required>
						<option selected>Poliklinik</option>
						<option>Genel Cerrahi Polikliniği</option>
					  </select>
				  </div>
				  <div class="col-sm-4 ">
					  <input id="input" type="date" name="istenen_tarih" class="form-control" placeholder="İstenilen Tarih" required>
				  </div>

				  </div>


						

						
				


					<div class="div1">
					  <h6 class="baslik2">TEST BİLGİLERİ</h6>
					</div>
				
				<div class="form-row">
					<div class="col-sm-4">
					  <h6 class="p-1 mb-1 bg-info text-white">ORTALAMA DEĞERLER</h6>
					</div>

					<div class="col-sm-4">
					  <h6 class="p-1 mb-1 bg-info text-white">STANDART HATA DEĞERLERİ</h6>
					</div>
					
					<div class="col-sm-4">
					  <h6 class="p-1 mb-1 bg-info text-white">EN BÜYÜK DEĞERLER</h6>
					</div>
				</div>
				
				
			
				
						
			<div class="form-row">
				<div class="col-sm-4 ">
					<select id="input1" name="Test_Adi1" class="custom-select mr-sm-2" id="inlineFormCustomSelect" required>
					<option selected></option>
					<?php
					$tetkik=$database->select("test_ozellik","*",["Alan"=>"ORTALAMA DEĞERLER"]);
					foreach($tetkik as $test_ozellik){	

					?>
					<option><?php echo $test_ozellik["Test_adi"]; ?></option>
					<?php
					}	
					?>
					</select>
					</div>

			

			

				

						<div class="col-sm-4 ">
						  <select id="input1" name="Test_Adi8"class="custom-select mr-sm-2" id="inlineFormCustomSelect" required>
							<option selected></option>
							<?php
							$tetkik=$database->select("test_ozellik","*",["Alan"=>"STANDART HATA DEĞERLERİ"]);
							foreach($tetkik as $test_ozellik){	

							?>
							<option><?php echo $test_ozellik["Test_adi"]; ?></option>
							<?php
							}
							?>
						  </select>
					  </div>




				
				

				
					 <div class="col-sm-4 ">
						  <select id="input1" name="Test_Adi15" class="custom-select mr-sm-2" id="inlineFormCustomSelect" required>
							<option selected></option>
							<?php
							$tetkik=$database->select("test_ozellik","*",["Alan"=>"EN BÜYÜK DEĞERLER"]);
							foreach($tetkik as $test_ozellik){	

							?>
							<option><?php echo $test_ozellik["Test_adi"]; ?></option>
							<?php
							}
							?>
						  </select>
					  </div>
		


					  
					<br>
					<br>

			
				<div class="col-sm-4 ">
					<select id="input1" name="Test_Adi2" class="custom-select mr-sm-2" id="inlineFormCustomSelect" required>
					<option selected></option>
					<?php
					$tetkik=$database->select("test_ozellik","*",["Alan"=>"ORTALAMA DEĞERLER"]);
					foreach($tetkik as $test_ozellik){	

					?>
					<option><?php echo $test_ozellik["Test_adi"]; ?></option>
					<?php
					}	
					?>
					</select>
					</div>

			

			

				

						<div class="col-sm-4 ">
						  <select id="input1" name="Test_Adi9" class="custom-select mr-sm-2" id="inlineFormCustomSelect" required>
							<option selected></option>
							<?php
							$tetkik=$database->select("test_ozellik","*",["Alan"=>"STANDART HATA DEĞERLERİ"]);
							foreach($tetkik as $test_ozellik){	

							?>
							<option><?php echo $test_ozellik["Test_adi"]; ?></option>
							<?php
							}
							?>
						  </select>
					  </div>




				
				

				
					 <div class="col-sm-4 ">
						  <select id="input1" name="Test_Adi16" class="custom-select mr-sm-2" id="inlineFormCustomSelect" required>
							<option selected></option>
							<?php
							$tetkik=$database->select("test_ozellik","*",["Alan"=>"EN BÜYÜK DEĞERLER"]);
							foreach($tetkik as $test_ozellik){	

							?>
							<option><?php echo $test_ozellik["Test_adi"]; ?></option>
							<?php
							}
							?>
						  </select>
					  </div>
		


					  
		

					<br>
					<br>

			
				<div class="col-sm-4 ">
					<select id="input1" name="Test_Adi3" class="custom-select mr-sm-2" id="inlineFormCustomSelect" required>
					<option selected></option>
					<?php
					$tetkik=$database->select("test_ozellik","*",["Alan"=>"ORTALAMA DEĞERLER"]);
					foreach($tetkik as $test_ozellik){	

					?>
					<option><?php echo $test_ozellik["Test_adi"]; ?></option>
					<?php
					}	
					?>
					</select>
					</div>

			

			

				

						<div class="col-sm-4 ">
						  <select id="input1" name="Test_Adi10" class="custom-select mr-sm-2" id="inlineFormCustomSelect" required>
							<option selected></option>
							<?php
							$tetkik=$database->select("test_ozellik","*",["Alan"=>"STANDART HATA DEĞERLERİ"]);
							foreach($tetkik as $test_ozellik){	

							?>
							<option><?php echo $test_ozellik["Test_adi"]; ?></option>
							<?php
							}
							?>
						  </select>
					  </div>




				
				

				
					 <div class="col-sm-4 ">
						  <select id="input1" name="Test_Adi17" class="custom-select mr-sm-2" id="inlineFormCustomSelect" required>
							<option selected></option>
							<?php
							$tetkik=$database->select("test_ozellik","*",["Alan"=>"EN BÜYÜK DEĞERLER"]);
							foreach($tetkik as $test_ozellik){	

							?>
							<option><?php echo $test_ozellik["Test_adi"]; ?></option>
							<?php
							}
							?>
						  </select>
					  </div>
		


					  
					<br>
					<br>

		
				<div class="col-sm-4 ">
					<select id="input1" name="Test_Adi4" class="custom-select mr-sm-2" id="inlineFormCustomSelect" required>
					<option selected></option>
					<?php
					$tetkik=$database->select("test_ozellik","*",["Alan"=>"ORTALAMA DEĞERLER"]);
					foreach($tetkik as $test_ozellik){	

					?>
					<option><?php echo $test_ozellik["Test_adi"]; ?></option>
					<?php
					}	
					?>
					</select>
					</div>

			

			

				

						<div class="col-sm-4 ">
						  <select id="input1" name="Test_Adi11" class="custom-select mr-sm-2" id="inlineFormCustomSelect" required>
							<option selected></option>
							<?php
							$tetkik=$database->select("test_ozellik","*",["Alan"=>"STANDART HATA DEĞERLERİ"]);
							foreach($tetkik as $test_ozellik){	

							?>
							<option><?php echo $test_ozellik["Test_adi"]; ?></option>
							<?php
							}
							?>
						  </select>
					  </div>




				
				

				
					 <div class="col-sm-4 ">
						  <select id="input1" name="Test_Adi18" class="custom-select mr-sm-2" id="inlineFormCustomSelect" required>
							<option selected></option>
							<?php
							$tetkik=$database->select("test_ozellik","*",["Alan"=>"EN BÜYÜK DEĞERLER"]);
							foreach($tetkik as $test_ozellik){	

							?>
							<option><?php echo $test_ozellik["Test_adi"]; ?></option>
							<?php
							}
							?>
						  </select>
					  </div>
		


					  
		
			
					<br>
					<br>

			
				<div class="col-sm-4 ">
					<select id="input1" name="Test_Adi5" class="custom-select mr-sm-2" id="inlineFormCustomSelect" required>
					<option selected></option>
					<?php
					$tetkik=$database->select("test_ozellik","*",["Alan"=>"ORTALAMA DEĞERLER"]);
					foreach($tetkik as $test_ozellik){	

					?>
					<option><?php echo $test_ozellik["Test_adi"]; ?></option>
					<?php
					}	
					?>
					</select>
					</div>

			

			

				

						<div class="col-sm-4 ">
						  <select id="input1" name="Test_Adi12" class="custom-select mr-sm-2" id="inlineFormCustomSelect" required>
							<option selected></option>
							<?php
							$tetkik=$database->select("test_ozellik","*",["Alan"=>"STANDART HATA DEĞERLERİ"]);
							foreach($tetkik as $test_ozellik){	

							?>
							<option><?php echo $test_ozellik["Test_adi"]; ?></option>
							<?php
							}
							?>
						  </select>
					  </div>




				
				

				
					 <div class="col-sm-4 ">
						  <select id="input1" name="Test_Adi19" class="custom-select mr-sm-2" id="inlineFormCustomSelect" required>
							<option selected></option>
							<?php
							$tetkik=$database->select("test_ozellik","*",["Alan"=>"EN BÜYÜK DEĞERLER"]);
							foreach($tetkik as $test_ozellik){	

							?>
							<option><?php echo $test_ozellik["Test_adi"]; ?></option>
							<?php
							}
							?>
	
						  </select>
					  </div>
		

		

					  
			
					
					<br>
					<br>


					
						<div class="col-sm-4 ">
							<select id="input1" name="Test_Adi6" class="custom-select mr-sm-2" id="inlineFormCustomSelect" required>
							<option selected></option>
							<?php
							$tetkik=$database->select("test_ozellik","*",["Alan"=>"ORTALAMA DEĞERLER"]);
							foreach($tetkik as $test_ozellik){	

							?>
							<option><?php echo $test_ozellik["Test_adi"]; ?></option>
							<?php
							}	
							?>
							</select>
							</div>

					

					

						

								<div class="col-sm-4 ">
								  <select id="input1" name="Test_Adi13" class="custom-select mr-sm-2" id="inlineFormCustomSelect" required>
									<option selected></option>
									<?php
									$tetkik=$database->select("test_ozellik","*",["Alan"=>"STANDART HATA DEĞERLERİ"]);
									foreach($tetkik as $test_ozellik){	

									?>
									<option><?php echo $test_ozellik["Test_adi"]; ?></option>
									<?php
									}
									?>
								  </select>
							  </div>




						
						

						
							 <div class="col-sm-4 ">
								  <select id="input1" name="Test_Adi20" class="custom-select mr-sm-2" id="inlineFormCustomSelect" required>
									<option selected></option>
									<?php
									$tetkik=$database->select("test_ozellik","*",["Alan"=>"EN BÜYÜK DEĞERLER"]);
									foreach($tetkik as $test_ozellik){	

									?>
									<option><?php echo $test_ozellik["Test_adi"]; ?></option>
									<?php
									}
									?>
			
								  </select>
							  </div>
				

					<br>
					<br>


					
						<div class="col-sm-4 ">
							<select id="input1" name="Test_Adi7" class="custom-select mr-sm-2" id="inlineFormCustomSelect" required>
							<option selected></option>
							<?php
							$tetkik=$database->select("test_ozellik","*",["Alan"=>"ORTALAMA DEĞERLER"]);
							foreach($tetkik as $test_ozellik){	

							?>
							<option><?php echo $test_ozellik["Test_adi"]; ?></option>
							<?php
							}	
							?>
							</select>
							</div>

					

					

						

								<div class="col-sm-4 ">
								  <select id="input1" name="Test_Adi14" class="custom-select mr-sm-2" id="inlineFormCustomSelect" required>
									<option selected></option>
									<?php
									$tetkik=$database->select("test_ozellik","*",["Alan"=>"STANDART HATA DEĞERLERİ"]);
									foreach($tetkik as $test_ozellik){	

									?>
									<option><?php echo $test_ozellik["Test_adi"]; ?></option>
									<?php
									}
									?>
								  </select>
							  </div>

							

						
							 <div class="col-sm-4 ">
								  <select id="input1" name="Test_Adi21" class="custom-select mr-sm-2" id="inlineFormCustomSelect" required>
									<option selected></option>
									<?php
									$tetkik=$database->select("test_ozellik","*",["Alan"=>"EN BÜYÜK DEĞERLER"]);
									foreach($tetkik as $test_ozellik){	

									?>
									<option><?php echo $test_ozellik["Test_adi"]; ?></option>
									<?php
									}
									?>
								  </select>
							  </div>
			
					</div>
					<div class="alert alert-warning" id="uyarı">
					  <strong>Uyarı!</strong> Testleri Sırası ile Seçiniz! Testler Sırası ile Seçilmezse Elde Edilen Sonuç Hatalıdır!
					</div>
					<br>
					<br>
				  <div class="form-group row">
					<div class="col-md-12">
					  <center><button type="submit" class="btn btn-info" >Kaydet</button></center>
					</div>
				  </div>	
				
				</form>
			
			</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
