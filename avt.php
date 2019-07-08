<?php
require('base/base.php');
if(isset($_POST['but'])){
$login=$_POST['login'];
$pas=$_POST['password'];
$host="localhost";
$user="root";
$query="SELECT `password`,`login` FROM `users` WHERE `login` = '$login'";
$res=mysql_query($query) or die ("Неверный запрос");
$phon=mysql_fetch_assoc($res) or die ("Введены неверные данные");
if($pas==$phon['password']){
	//header('location:IndexAdmin.php');
?>
<script>
	location.href = "IndexAdmin.php";
</script>
<?php
}
}
	
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Золотой дракон</title>
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <!-- Font Awesome -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style2.css" rel="stylesheet">
 
 

</head>

<body>

 
    <div class="container mt-5">

<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Авторизация</h3>
				
			</div>
			<div class="card-body">
				<form method="post">

					<div class="input-group form-group">

						<div class="input-group-prepend">
							<span class="input-group-text">Введите логин</span>
						</div>

						<input name='login' type="text" class="form-control" placeholder="username" >
						
					</div>

					<div class="input-group form-group">

						<div class="input-group-prepend">

							<span class="input-group-text">Введите пароль</span>

						</div>
						<input name='password' type='password' class="form-control" placeholder="password" >
					</div>
					
					
						
<input name="but" type="submit" value="Войти" class="btn btn-success login_btn">
<input class="btn btn-success login_btn" onclick="out()"  value="Вернуться назад">
						
					</div>
				</form>
			</div>
			
		</div>
	</div>

</div>



	<script type="text/javascript" src="js/jquery-3.4.0.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script src="js/js.js"></script>
  <script>
  	new WOW().init();
  </script>
  <script>
  	function out() {

  		location.href = "Index.php";
  	}
  </script>

</body>
</html>