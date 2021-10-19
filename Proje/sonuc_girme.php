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

    <title>Sonuç Gir</title>
  </head>
<style>

@import url('https://fonts.googleapis.com/css?family=Numans');

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
height:780px;
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

}

.baslik1{
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


.div3{
	background-color:grey;
	margin:auto;
	margin-top:5px;
	margin-left:15px;
	
}


.btn{
	margin-top:0px;
	margin-left:-15px;
}

.div2{
	background-color:grey;

}

.my-custom-scrollbar {
	position: relative;
	height: 510px;
	overflow: auto;
}
.table-wrapper-scroll-y {
	display: block;
}


#input{
	height:35px;
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

#giris{
	width:150px;
}

#baslik{
margin-top:250px;


}


#onayla{
	margin-top:10px;
}

#tableboyut{
	width:520px;
	margin-left:28px;


	}


#baslikcenter{
	text-align:center;
}

#input1{
	text-align:center;
	width:320px;
	margin-left:88px;
	height:35px;
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
        <a class="nav-link" id="lab" href="sonuc_girme.php">TEST SONUCU GİR<span class="sr-only">(current)</span></a>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a href="laboratuvarcikis_yap.php"><button class="btn btn-danger my-2 my-sm-0" type="button">Çıkış Yap</button></a>
    </form>
  </div>
</nav>

<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<center><h5>TEST SONUÇ GİRME</h5></center>
			</div>
			
		<form action="sonuc_girme.php" method="POST">	
			<div class="card-body">
				<?php
					$Barkod_No=0;
					if(isset($_POST['Barkod_No'])){
						$Barkod_No=$_POST['Barkod_No'];
	
				
					}
					$sonuc_gir=$database->get("tetkik","*",["Barkod_No"=>$Barkod_No]);	
	

					
				?>
				
				<div class="div">
				  <h6 class="baslik">DOKTOR BİLGİLERİ</h6>
				</div>
				
				
				  <div class="form-row">
					<div class="col-sm-4 ">
					  <div  id="input" type="text" class="form-control"><?php if(isset($_POST['Barkod_No'])){echo $sonuc_gir["Doktor"];}?></div>
					</div>

					<div class="col-sm-4 ">
					  <div id="input" type="text" class="form-control"><?php if(isset($_POST['Barkod_No'])){echo $sonuc_gir["Poliklinik"];}?></div>
					</div>
					
				  <div class="col-sm-4 ">
					  <div  id="input" type="text" class="form-control"><?php if(isset($_POST['Barkod_No'])){echo $sonuc_gir["istenen_tarih"];}?></div>
				  </div>

				  </div>
				<div class="div1">
				  <h6 class="baslik">HASTA BİLGİLERİ</h6>
				</div>
				
					
				<div class="form row" >
					<div class="input-group col-sm-3">
					  <input id="input" name="Barkod_No" type="text" class="form-control" placeholder="Barkod No">
					  <div class="input-group col-sm-3">
						<button id="input" class="btn btn-info" type="submit">Ara</button> 
					  </div>
					</div>
				
				
				<?php
					$Barkod_No=0;


					if(isset($_POST['Barkod_No'])){
						$Barkod_No=$_POST['Barkod_No'];

				
					}
					
					
					$sonuc_gir=$database->get("tetkik","*",["Barkod_No"=>$Barkod_No]);	


					
				?>
				
				
				

				
					<div class="col-sm-3 ">
						<div id="input" type="text" class="form-control" placeholder="TC"><?php if(isset($_POST['Barkod_No'])){echo $sonuc_gir["TC_No"];}?></div>
					</div>
						
				</div>


				
					<div class="div1">
					  <h6 class="baslik">TEST SONUÇ GİRME</h6>
					</div>
					
			<div class="form row">
				<div class="table-wrapper-scroll-y my-custom-scrollbar">
				<div class="form row">
					<table id="tableboyut" class="table table-bordered table-striped mb-0">
						<thead>
						  <tr>
							<th id="baslikcenter">Test</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td><div  id="input"><?php if(isset($_POST['Barkod_No'])){echo $sonuc_gir["Test_Adi1"];}?></div></td>
						  </tr>
						  <tr>
							<td><div  id="input"><?php if(isset($_POST['Barkod_No'])){echo $sonuc_gir["Test_Adi2"];} ?></div></td>
						  </tr>
						  <tr>
							<td><div  id="input"><?php if(isset($_POST['Barkod_No'])){echo $sonuc_gir["Test_Adi3"];} ?></div></td>
						  </tr>
						  <tr> 
							<td><div  id="input"><?php if(isset($_POST['Barkod_No'])){echo $sonuc_gir["Test_Adi4"];} ?></div></td>
						  </tr>
						  <tr>
							<td><div  id="input"><?php if(isset($_POST['Barkod_No'])){echo $sonuc_gir["Test_Adi5"];} ?></div></td>
						  </tr>
						  <tr>
							<td><div  id="input"><?php if(isset($_POST['Barkod_No'])){echo $sonuc_gir["Test_Adi6"];} ?></div></td>
						  </tr>
						  <tr>
							<td><div  id="input"><?php if(isset($_POST['Barkod_No'])){echo $sonuc_gir["Test_Adi7"];} ?></div></td>
						  </tr>
						  <tr>
							<td><div  id="input"><?php if(isset($_POST['Barkod_No'])){echo $sonuc_gir["Test_Adi8"];} ?></div></td>
						  </tr>
						  <tr>
							<td><div  id="input"><?php if(isset($_POST['Barkod_No'])){echo $sonuc_gir["Test_Adi9"];} ?></div></td>
						  </tr>
						  <tr>
							<td><div  id="input"><?php if(isset($_POST['Barkod_No'])){echo $sonuc_gir["Test_Adi10"];} ?></div></td>
						  </tr>	
						  <tr>
							<td><div  id="input"><?php if(isset($_POST['Barkod_No'])){echo $sonuc_gir["Test_Adi11"];} ?></div></td>
						  </tr>
						  <tr>
							<td><div  id="input"><?php if(isset($_POST['Barkod_No'])){echo $sonuc_gir["Test_Adi12"];} ?></div></td>
						  </tr>
						  <tr>
							<td><div  id="input"><?php if(isset($_POST['Barkod_No'])){echo $sonuc_gir["Test_Adi13"];} ?></div></td>
						  </tr>
						  <tr>
							<td><div  id="input"><?php if(isset($_POST['Barkod_No'])){echo $sonuc_gir["Test_Adi14"];} ?></div></td>
						  </tr>
						  <tr>
							<td><div  id="input"><?php if(isset($_POST['Barkod_No'])){echo $sonuc_gir["Test_Adi15"];} ?></div></td>
						  </tr>
						  <tr>
							<td><div  id="input"><?php if(isset($_POST['Barkod_No'])){echo $sonuc_gir["Test_Adi16"];} ?></div></td>
						  </tr>						  
						  <tr>
							<td><div  id="input"><?php if(isset($_POST['Barkod_No'])){echo $sonuc_gir["Test_Adi17"];} ?></div></td>
						  </tr>		
						  <tr>
							<td><div  id="input"><?php if(isset($_POST['Barkod_No'])){echo $sonuc_gir["Test_Adi18"];} ?></div></td>
						  </tr>	
						  <tr>
							<td><div  id="input"><?php if(isset($_POST['Barkod_No'])){echo $sonuc_gir["Test_Adi19"];} ?></div></td>
						  </tr>		
						  <tr>
							<td><div  id="input"><?php if(isset($_POST['Barkod_No'])){echo $sonuc_gir["Test_Adi20"];} ?></div></td>
						  </tr>			
						  <tr>
							<td><div  id="input"><?php if(isset($_POST['Barkod_No'])){echo $sonuc_gir["Test_Adi21"];} ?></div></td>
						  </tr>						  
						</tbody>
					  </table>

					</form>	
	
					<form action="sonuckaydet.php" method="POST">	
			
					
					<table id="tableboyut" class="table table-bordered table-striped mb-0">
						<thead>
						  <tr>
							<th id="baslikcenter">Sonuç</th>
						  </tr>
						</thead>
						<tbody>
						<tr>
						<td>
						<input id="input1" type="text"  name="Sonuc1" class="form-control" placeholder=">=6.981 / <=8.11" required></input>
						</td>
						</tr>

						<tr >
						<td><input id="input1" name="Sonuc2" type="text" class="form-control" placeholder="<=19.54 - >19.54 / <=20.99 - >20.99" required></input></td>
						 </tr>
						 
						<tr >
						<td><input id="input1" name="Sonuc3" type="text" class="form-control" placeholder=">=43.79 / <=188.5" required></input></td>
						 </tr>
						 
						<tr >
						<td><input id="input1" name="Sonuc4" type="text" class="form-control" placeholder=">=143.5 / <=2499.0" required></input></td>
						 </tr>
						 
						<tr >
						<td><input id="input1" name="Sonuc5" type="text" class="form-control" placeholder=">=0.117 / <=0.1142" required></input></td>
						</tr>
				  
						<tr >
						<td><input id="input1" name="Sonuc6" type="text" class="form-control" placeholder="<=0.0716 - >0.0716 / <=0.0755 - >0.0755" required></input></td>
						</tr>
						
						<tr >
						<td><input id="input1" name="Sonuc7" type="text" class="form-control" placeholder=">=0.106 / <=0.304" required></input></td>
						</tr>

						<tr >
						<td><input id="input1" name="Sonuc8" type="text" class="form-control" placeholder=">=0.3141 / <=1.046" required></input></td>
						</tr>
						
						<tr >
						<td><input id="input1" name="Sonuc9" type="text" class="form-control" placeholder=">=0.3602 / <=4.885" required></input></td>
						</tr>
						
						<tr >
						<td><input id="input1" name="Sonuc10" type="text" class="form-control" placeholder=">=0.757 / <=21.98" required></input></td>
						</tr>
					
						<tr >
						<td><input id="input1" name="Sonuc11" type="text" class="form-control" placeholder="<=13.88 / >13.88" required></input></td>
						</tr>
						
						
						<tr>
						<td><input id="input1" name="Sonuc12" type="text" class="form-control" placeholder=">=0.001713 / <=0.03113" required></input></td>
						</tr>
						
						
						<tr >
						<td><input id="input1" name="Sonuc13" type="text" class="form-control" placeholder=">=0 / <=0.396" required></input></td>
						</tr>
						
						<tr >
						<td><input id="input1" name="Sonuc14" type="text" class="form-control" placeholder=">=0.007882 / <=0.07895" required></input></td>
						</tr>
						
						<tr >
						<td><input id="input1" name="Sonuc15" type="text" class="form-control" placeholder="<=12.58 - >12.58 / <=15.77 - >15.77" required></input></td>
						</tr>
						
						<tr >
						<td><input id="input1" name="Sonuc16" type="text" class="form-control" placeholder="<=12.02 - >12.02  / <=49.54 - >49.54" required></input></td>
						</tr>				

						<tr >
						<td><input id="input1" name="Sonuc17" type="text" class="form-control" placeholder=">=50.41 / <=251.2" required></input></td>
						</tr>						
						
						<tr >
						<td><input id="input1" name="Sonuc18" type="text" class="form-control" placeholder="<=880.8 / >880.8" required></input></td>
						</tr>						
						
						<tr >
						<td><input id="input1" name="Sonuc19" type="text" class="form-control" placeholder="<=0.1365 - >0.1365 / <=0.1398 - >0.1398" required></input></td>
						</tr>			

						<tr >
						<td><input id="input1" name="Sonuc20" type="text" class="form-control" placeholder="<=0.3664 / >0.3664" required></input></td>
						</tr>		

						<tr >
						<td><input id="input1" name="Sonuc21" type="text" class="form-control" placeholder=">=0.1648 / <=0.6638" required></input></td>
						</tr>						
				</tbody>
				</table>
				</div>
		
					<div class="div3">
					  <h6 class="baslik1">LABORATUVAR GÖREVLİSİ</h6>
					</div>			
					<div class="form-row">
						<div class="col-sm-3 ">
						  <input id="input" type="text" name="Lab_uzman" class="form-control" placeholder="Ad Soyad" required>
						</div>
						
					  
					  <div class="col-sm-3">
						  <input id="input" name="Alan" type="text" class="form-control" placeholder="Laboratuvar Alanı" required>
					  </div>
					  
					  <div class="col-sm-3">
						  <input id="input" name="Barkod_No" type="text" class="form-control" placeholder="Hasta Barkod No" required>
					  </div>
					  
					  
					  
					  <div class="col-sm-3">
						  <input id="input" name="Sonuc_tarih" type="date" class="form-control" required>
					  </div>
					  
					  
					</div>
		

					<br>
				  <div class="form-group row">
					<div class="col-md-12">
					  <center><button type="submit"  class="btn btn-info">Onayla</button></center>
					</div>
					</div>
				</form>
	
				
			</div>

			</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
