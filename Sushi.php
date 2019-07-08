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
      <a class="navbar-brand" href="#">Панель администратора </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse collapse show" id="navbarsExample04" style="">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="indexAdmin.php">Заказы <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="newsAdmin.php">Новости</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link " href="otzivAdmin.php">Отзывы</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="userAdmin.php">Пользователи</a>
          </li>
          <li class="nav-item dropdown  active">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Меню</a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="Set.php">Сеты</a>
              <a class="dropdown-item" href="Rol.php">Роллы</a>
              <a class="dropdown-item" href="Sushi.php">Суши</a>
              <a class="dropdown-item" href="Hot.php">Горячее</a>
            </div>
          </li>
        </ul>
        <ul class="ml-auto">
          <li class="nav-item ">
            <a href="avt.php" class="nav-link waves-effect">
             <i class="fa fa-user-circle" aria-hidden="true"></i>
              <span class="clearfix d-none d-sm-inline-block">Выйти</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>

	

	
			

	<!--Акции-->

	<main >
		
		<div class="container ">
		

			<div class="tableadmin text-center">
				<h1>
      <strong>Редактирование данных </strong>
      			</h1>
      <table class="table table-striped table-inverse" border='1'>
      	 <thead class="thead-inverse">
  <tr>
    <th><strong>URL изображения</strong></thth>
    <th><strong>Наименование</strong></th>
    <th><strong>Состав</strong></th>
    <th><strong>Цена(Рублей)</strong></th>
    <th><strong>Вес(Грамм)</strong></th>
    <th><strong>Действие</strong></th>
	<th><strong>Действие</strong></th>
  </tr>
</thead>
<tbody>

  <?php 
  
include ('base/base.php');

$link = mysqli_connect($host, $user, $pass, $db_name); // Соединяемся с базой

    // Ругаемся, если соединение установить не удалось
    if (!$link) {
      mysqli_connect_error();
      exit;
    }
if (isset($_POST['red_id'])) { //Проверяем, передана ли переменная на редактирования
    
$sql = mysql_query("UPDATE `sushi` SET  `name` = '{$_POST['name']}',`photo` = '{$_POST['photo']}', `price` = '{$_POST['price']}', `ves` = '{$_POST['ves']}', `sostav` = '{$_POST['sostav']}' WHERE `id` = {$_POST['red_id']}");
		
		
    
}
if (isset($_POST['del_id'])) { //Проверяем, передана ли переменная на удаления
    $sql = mysql_query("DELETE FROM `sushi` WHERE `id` = {$_POST['del_id']}");
}
    
$product=mysql_query("SELECT * FROM `sushi`") or die("ERROR!");
 if(mysql_num_rows($product)!=0){
      while($prod_arr=mysql_fetch_array($product)){
    
      echo "
<form method='POST'>
      <tr>
      <td class='col-md-2'> <textarea class='form-control'  name='photo'>".$prod_arr['photo']." </textarea></td>
      <td> <textarea class='form-control'  name='name'>".$prod_arr['name']." </textarea></td>
      <td class='col-md-3'> <textarea class='form-control'   name='sostav'>".$prod_arr['sostav']." </textarea></td>
      <td> <input class='form-control' value='".$prod_arr['price']."' name='price'></td>
      <td> <input class='form-control' value='".$prod_arr['ves']."' name='ves'></td>
    
      <td ><button class = 'btn btn-success btn-sm'  name='red_id' value='".$prod_arr['id']."' type='submit'>Редактировать</button>
      </td>
      <td>
	  <button class = 'btn btn-red btn-sm' name='del_id' value='".$prod_arr['id']."' type='submit'>Удалить</button>
	  </td>
	  
	  
      </tr>
      </form>";
    }}
  ?>
  
  </tbody>
</table>

<h1>
 <strong>Добавление товара</strong>
      			</h1>

<form action='#' method="post">
      <table class="table table-striped table-inverse" border='1'>
      	 <thead class="thead-inverse">
  <tr>
    <td><strong>URL изображения</strong></td>
    <td><strong>Наименование</strong></td>
    <td><strong>Состав</strong></td>
    <td><strong>Цена</strong></td>
   	<td><strong>Вес(Грамм)</strong></td>
    <td><strong>Действие</strong></td>
	
  </tr>

  
</thead>
<tbody>
<tr>
  	<td><textarea class="form-control" id="photoSushi" name ="photoSushi"></textarea></td>
  	<td><textarea class="form-control" id="nameSushi" name ="nameSushi"></textarea></td>
  	<td><textarea class="form-control" id="sostavSushi" name ="sostavSushi"></textarea></td>
  	<td><textarea class="form-control" id="priceSushi" name ="priceSushi"></textarea></td>
  	<td><textarea class="form-control" id="vesSushi" name ="vesSushi"></textarea></td>
  	<td>
		
  		 <button class = 'btn btn-success btn-sm' onclick="sendSushi()"  type='submit'>Добавить</button>
  	</td>
</tr>
	</tbody>
	</table>
</form>
           </div>

<!-- Роллы -->




		</div>
	</main>

	<footer class="bg-dark page-footer text-center font-small mt-4 wow fadeIn">
		

		<div class="footer-copyright py-3 ">
			
			Доставка суши и роллов
		</div>
	</footer>

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
 <script type="text/javascript">
  	
  	function sendSushi() {
  		
  		var photoSushi = document.getElementById('photoSushi').value;
  		var nameSushi =document.getElementById('nameSushi').value;
  		var sostavSushi = document.getElementById('sostavSushi').value;
  		var priceSushi = document.getElementById('priceSushi').value;
  		var vesSushi = document.getElementById('vesSushi').value;
  		 $.ajax({
          type:'POST',
          url:'ajaxSushi.php',
          data:{photoSushi:photoSushi, nameSushi:nameSushi, sostavSushi:sostavSushi, priceSushi:priceSushi, vesSushi:vesSushi},
          dataType: "json",
          success: function(result){
          	alert('данные отправлены');
          }

          
          

  	});
}


  </script>
</body>

</html>
