<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Золотой дракон</title>
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">


</head>

<body>
		

	<nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Золотой дракон</a>
      <a href="#" class="navbar-brand waves-effect">
				
				<img src="img/menu/icon.png" alt="" width="60vh">
				

			</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse collapse show" id="navbarsExample04" style="">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="index.php">Главная<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="menu.php">Меню</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link " href="kontact.php">О нас</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="akzii.php">Новости</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="otziv.php">Отзывы</a>
          </li>
        </ul>
        <ul class="navbar-nav nav-flex-icons">
					<li class="nav-item">
						<a href="korzina.php" class="nav-link waves-effect">
							
							<i class="fa fa-shopping-cart"></i>
							<span class="clearfix d-none d-sm-inline-block">Корзина</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="https://vk.com/zolotoidrakon.sarapul" class="nav-link waves-effect">
							<i class="fa fa-vk" aria-hidden="true"></i>
							<span class="clearfix d-none d-sm-inline-block">Мы ВКонтакте</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="avt.php" class="nav-link waves-effect">
							<i class="fa " aria-hidden="true"></i>
							<span class="clearfix d-none d-sm-inline-block">Авторизация</span>
						</a>
					</li>
					

				</ul>
      </div>
    </nav>
	

	<div id="carousel-ex" class="carousel slide carousel-fade pt-6" data-rise="carousel">
		<ol class="carousel-indicators">

		<li class="active" data-target="carousel-ex" data-slide-to="0">
		</li>
		<li  data-target="carousel-ex" data-slide-to="1">
		</li>
		<li  data-target="carousel-ex" data-slide-to="2">
		</li>

		</ol>

		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<div class="view" style="
				background-image:url('img/menu/fon1.png');
				background-repeat:no-repeat;
				background-size:cover; ">
					<div class="mask rgba-black-strong d-flex justify-content-center align-items-center">
						<div class="text-center white-text mx-5 wow fadeIn">
							<h1 class="mb-4">
								<strong>ДОСТАВКА СУШИ "ЗОЛОТОЙ ДРАКОН"</strong>
							</h1>

							<p><strong>Готовя с любовью, мы делаем жизнь вкуснее. Мы стараемся сделать суши и роллы для вас максимально вкусно и максимально быстро.</strong></p>

							<p class="mb-4 d-none d-md-block">
								<strong> Для вас все самое свежее и вкусное. </strong>
							</p>

							
						</div>
					</div>
				</div>
			</div>

			<!--Второй слайд -->


			<div class="carousel-item ">
				<div class="view" style="background-image:url('img/menu/fon2.png');background-repeat:no-repeat;background-size:cover; ">
					<div class="mask rgba-black-strong d-flex justify-content-center align-items-center">
						<div class="text-center white-text mx-5 wow fadeIn">
							

							
						</div>
					</div>
				</div>
			</div>

			<!--Третий слайд -->

			<div class="carousel-item ">
				<div class="view" style="background-image:url('img/menu/fon3.png');background-repeat:no-repeat;background-size:cover; ">
					<div class="mask rgba-black-strong d-flex justify-content-center align-items-center">
						<div class="text-center white-text mx-5 wow fadeIn">
							

							
						</div>
					</div>
				</div>
			</div>
		</div>

		<a href="#carousel-ex" role="button" data-slide="prev" class="carousel-control-prev"> 
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		</a>

		<a href="#carousel-ex" role="button" data-slide="next" class="carousel-control-next"> 
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
		</a>
	</div>


	<!--Акции-->

	<main>
		
		<div class="container">
			
			


			<section class="text-center mb-4 mt-4">
			
<?php 

require ('base/base.php');

$product=mysql_query("SELECT * FROM `news`") or die("ERROR!");
 if(mysql_num_rows($product)!=0){
      while($prod_arr=mysql_fetch_array($product)){
        
        echo "<div class='col-sm-12 col-md-12 mx-auto sort' id='cont_".$prod_arr['id']."'>";
        echo "
         <div class='row featurette'>

      <div class='col-md-7 p-5'>
        <h2 class='featurette-heading'>
        <span class='text-muted text-center'></span></h2>
        <p class='lead'>".$prod_arr['text']."</p>
      </div>

      <div class='q col-md-5'>
      	<div class='w p-3'>
        <img src='".$prod_arr['photo']."' alt=''>
        </div>
      </div>
    </div>

    
	<hr class='featurette-divider'>
		<p>Дата публикации:  ".$prod_arr['date']."</p>
    <hr class='featurette-divider'>

    </div>";
      }
    }

?>


				
			</section>
		</div>
	</main>

	<nav class="navbar  navbar-expand-sm navbar-dark bg-dark">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarCollapse">
        <ul class="navbar-nav mx-auto text-center">
          <li class="nav-item ">
            <a class="nav-link" href="index.php">Главная<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="menu.php">Меню</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link " href="kontact.php">О нас</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="akzii.php">Новости</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="otziv.php">Отзывы</a>
          </li>
        </ul>
      </div>

    </nav>
    <div class="footer-copyright py-3 text-center">
			
			<h2 style="color:black;">Доставка суши и роллов "Золотой дракон"</h2>
		</div>
  <!-- SCRIPTS -->
  <!-- JQuery -->
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
</body>

</html>
