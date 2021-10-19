<?php 
session_start()
?>
<!doctype html>
<html lang="tr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


    <title>Laboratuvar Giriş</title>
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
height: 380px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.4) !important;
}

.card-header h4{
color: white;
}

.input-group-prepend span{
width: 50px;
background-color: #BDBDBD;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

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

#uye1{
	color:white;
	float:right;
}

#uye{
	color:white;
	float:left;
}


#benihatirla{
	color:white;
}

.btn{
	background-color:white;
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
        <a class="nav-link" id="lab" href="laboratuvar.php">LABORATUVAR <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" id="lab" href="doktor.php">DOKTOR <span class="sr-only">(current)</span></a>
      </li>
    </ul>

  </div>
</nav>


<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<center><h4>LABORATUVAR</h4></center>
			</div>
			<div class="card-body">

			<form action="laboratuvargiris_isle.php" method="POST">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="email" class="form-control" name="eposta"  placeholder="Kullanıcı adınızı giriniz..."
						value="<?php if(isset($_COOKIE["eposta"])) { echo $_COOKIE["eposta"]; } ?>">
					</div>
					
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" name="sifre" placeholder="Şifrenizi giriniz..." 
						value="<?php if(isset($_COOKIE["sifre"])) { echo $_COOKIE["sifre"]; } ?>">
					</div>

				  <div class="form-check">
					<input type="checkbox" name="beni_hatirla" checked="checked">
					<label class="form-check-label" id="benihatirla"  >Beni Hatırla</label>
				  </div>
  					<br>
					<br>
					<center><button type="submit" align="center" name="laboratuvar_giris" id="giris" class="btn">Giriş</button></center>
					<br>
					<br>

				</form>

      <!--UYARILAR-->

      <?php 

      if (isset($_GET['mesaj'])) {
        switch ($_GET['mesaj']) {
          case "hata2":
          echo '<div class="alert alert-warning" role="alert">';
          echo "E-posta veya Şifre hatalı. Lütfen tekrar deneyiniz.</div>";
          break;

          case "hata1":
          echo '<div class="alert alert-warning" role="alert">';
          echo "Lütfen kullanıcı girişi yapınız.</div>";
          break;

          default:
          echo "";
          break;
        }
      }

      ?>

      <!--UYARILAR BİTİŞ-->
			</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
