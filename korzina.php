
<!-- удаление товаров из сессии -->
<?php
session_start();
//var_dump($_SESSION);
if(isset($_POST['del_k'])){
  $value=$_POST['del_k'];
  //setcookie("bd[$value]", '0');
  unset($_SESSION['bd'][$value]);//"bd[$value]", '', time()-3600);
  header("Location: korzina.php");

}
if(isset($_POST['del_kR'])){
  $value=$_POST['del_kR'];
  //setcookie("bdR[$value]", '', time()-3600);
   unset($_SESSION['bdR'][$value]);//"bd[$value]", '', time()-3600);
  header("Location: korzina.php");

}
if(isset($_POST['del_kS'])){
  $value=$_POST['del_kS'];
  //setcookie("bdS[$value]", '', time()-3600);
   unset($_SESSION['bdS'][$value]);//"bd[$value]", '', time()-3600);
  header("Location: korzina.php");

}
if(isset($_POST['del_kH'])){
  $value=$_POST['del_kH'];
  //setcookie("bdH[$value]", '', time()-3600);
   unset($_SESSION['bdH'][$value]);//"bd[$value]", '', time()-3600);
  header("Location: korzina.php");

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
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

 

</head>

<body onload="stoim();">
  
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
          <li class="nav-item">
            <a class="nav-link " href="kontact.php">О нас</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="akzii.php">Новости</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="otziv.php">Отзывы</a>
          </li>
        </ul>
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item active">
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
             <i class="fa fa-user-circle" aria-hidden="true"></i>
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

<br>
<br>

  <!--Акции-->

  <main>
    
    <div class="container">
      
      <div class="content">
         
            <div class="cart text-center ">
            
           <form action="korzina.php" method="post">

           <table class="table">
  <thead class="thead-dark">
    <tr class="text-center">
      <th scope="col">Изображение</th>
      <th scope="col">Название</th>
      <th scope="col">Цена (Рублей)</th>
      <th scope="col">Количество (Шт)</th>
      <th scope="col">Сумма (Рублей)</th>
      <th scope="col">Действие</th>
    </tr>
  </thead>
  <tbody>

            
<?php
 
 

if (isset($_COOKIE['bd'])) 
{
  include "base/base.php";
 $tovar = array();
    foreach ($_COOKIE['bd'] as $name => $value) 
    {
      $product=mysql_query("SELECT * FROM `set` WHERE `id` = $name");
      $prod=mysql_fetch_array($product);
      $tovar[] = $prod['name'] . ' (' . $value . ') шт.';
          echo "

            
    <tr class='text-center '>
      
      <td><img height='150px' src='".$prod['photo']."'></td>
      <td><div class='p-4'><a>".$prod['name']."</a></div></td>
      <td><div class='p-4'><a>".$prod['price']."</a></div></td>
      <td><div class='p-4'><a>".$value."</a></div></td>
      <td><div class='p-4'><a><i class='stoimost'>".$value*$prod['price']."</i></a></div></td>
      <td><div class='p-3'><button class='del_k btn btn-sm btn-red' name='del_k' value='".$prod['id']."'  >Убрать из корзины</button></div></td>

    </tr>






           ";


   }
   $tovar = implode(';', $tovar);
  
} else echo "<h2>Корзина пуста!</h2>";
?>


<?php
 


if (isset($_COOKIE['bdR'])) 
{
  include "base/base.php";
 $tovarR = array();
    foreach ($_COOKIE['bdR'] as $name => $value) 
    {
      
      $product=mysql_query("SELECT * FROM `rol` WHERE `id` = $name");
      $prodR=mysql_fetch_array($product);
      $tovarR[] = $prodR['name'] . ' (' . $value . ') шт.';
          echo "

            
    <tr class='text-center '>
      
      <td><img height='150px' src='".$prodR['photo']."'></td>
      <td><div class='p-4'><a>".$prodR['name']."</a></div></td>
      <td><div class='p-4'><a>".$prodR['price']."</a></div></td>
      <td><div class='p-4'><a>".$value."</a></div></td>
      <td><div class='p-4'><a><i class='stoimost'>".$value*$prodR['price']."</i></a></div></td>
      <td><div class='p-3'><button class='del_k btn btn-sm btn-red' name='del_k' value='".$prodR['id']."' >Убрать из корзины</button></div></td>

    </tr>






           ";


  }
  $tovarR = implode(';', $tovarR);


  /*echo "<button type='button' value='Click' onclick='viewDiv()' class='oformit' value='6'>Оформить заказ</button>";*/
} else echo "<h2>Корзина пуста!</h2>";

?>
<?php
 


if (isset($_COOKIE['bdS'])) 
{
  include "base/base.php";
  $tovarS = array();
    foreach ($_COOKIE['bdS'] as $name => $value) 
    {
      $product=mysql_query("SELECT * FROM `sushi` WHERE `id` = $name");
      $prodS=mysql_fetch_array($product);
      $tovarS[] = $prodS['name'] . ' (' . $value . ') шт.';
          echo "

            
    <tr class='text-center '>
      
      <td><img height='150px' src='".$prodS['photo']."'></td>
      <td><div class='p-4'><a>".$prodS['name']."</a></div></td>
      <td><div class='p-4'><a>".$prodS['price']."</a></div></td>
      <td><div class='p-4'><a>".$value."</a></div></td>
      <td><div class='p-4'><a><i class='stoimost'>".$value*$prodS['price']."</i></a></div></td>
      <td><div class='p-3'><button class='del_k btn btn-sm btn-red' name='del_k' value='".$prodS['id']."'  >Убрать из корзины</button></div></td>

    </tr>

           ";


  }$tovarS = implode(';', $tovarS);
  /*echo "<button type='button' value='Click' onclick='viewDiv()' class='oformit' value='6'>Оформить заказ</button>";*/
} else echo "<h2>Корзина пуста!</h2>";
?>
<?php
 


if (isset($_COOKIE['bdH'])) 
{
  include "base/base.php";
  $tovarH = array();
    foreach ($_COOKIE['bdH'] as $name => $value) 
    {
      $product=mysql_query("SELECT * FROM `hot` WHERE `id` = $name");
      $prodH=mysql_fetch_array($product);
      $tovarH[] = $prodH['name'] . ' (' . $value . ') шт.';
          echo "

            
    <tr class='text-center '>
      
      <td><img height='150px' src='".$prodH['photo']."'></td>
      <td><div class='p-4'><a>".$prodH['name']."</a></div></td>
      <td><div class='p-4'><a>".$prodH['price']."</a></div></td>
      <td><div class='p-4'><a>".$value."</a></div></td>
      <td><div class='p-4'><a><i class='stoimost'>".$value*$prodH['price']."</i></a></div></td>
      <td><div class='p-3'><button class='del_k btn btn-sm btn-red' name='del_k' value='".$prodH['id']."'  >Убрать из корзины</button></div></td>

    </tr>
";


  }
  $tovarH= implode(';', $tovarH);
  

  /*echo "<button type='button' value='Click' onclick='viewDiv()' class='oformit' value='6'>Оформить заказ</button>";*/
} else echo "<h2>Корзина пуста!</h2>";
?>
</tbody>
</table>
</form>
 <div  id='div1' class='div1 '>


<div class=' col-md-5 mx-auto' style='text-transform: capitalize;background-color: #1f1e1c' onclick="itog()">
  <h2 style="display: inline-flex;">
    Итог:&nbsp
  <div id='itog'>
    
  </div>&nbspруб.</h2>
</div>
  <!-- формирование блока оформления заказа -->
  <div class=" col-md-5 mx-auto  text-center " style="background-color: #1f1e1c;border-radius: 2%;"
  >
    
    
        
        
        

       <!--  // $MyArr= array_merge($tovar,$tovarR,$tovarS,$tovarH);  -->
      

        <!--  Чтобы разобрать строку в массив!
         $tovar = explode(';', $tovar); -->
      
      <form class="rt navbar-dark " action="korzina.php" method="post">
        <input type="hidden" name="tovar" id="tovar" value="

        <?php 
        if(!empty($tovar)) {
        print_r($tovar);
        }
        if(!empty($tovarR)) {
        print_r($tovarR);
        }
        if(!empty($tovarS)) {
        print_r($tovarS);
        }
        if(!empty($tovarH)) {
        print_r($tovarH);
        }
        ?>"
        >
        
        <input type="hidden" id="tovarInput" name="summa" value="">
        <h2>Заполните ваши данные</h2>
        <p>Ваше имя*:</p><input id="nameperson" class="col-md-10 mx-auto form-control" type="text" name="nameperson" pattern="^[A-zА-я]+$" required>
        <p>Телефон*:</p><input class="col-md-10 mx-auto form-control" type="phone" id="phone" name="phone" pattern="+[0-9]{11}" placeholder="+7xxxxxxxxxx" required>
        <p>E-mail:</p><input class="col-md-10 mx-auto form-control" id="mail" type="mail" name="mail">
        <p>Адрес*:</p><input class="col-md-10 mx-auto form-control" type="text" id="adres" name="adres" required>
        <p>Комментарий:</p><textarea class="col-md-10 mx-auto form-control" type="text" id="comment" name="comment"></textarea>
        <input type="submit" name="order" onclick="send()" class="btn bg-primary" value="Заказать">
        <p >* - поля, обязательные для заполнения</p>
      </form>
  </div>
</div>
</div>
                     
          
    
  </div>
      
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
  <script>
    new WOW().init();
  </script>
 
  <script type="text/javascript">
    function stoim(){
      stoim = document.getElementsByClassName('stoimost');
      summ = 0;
      for(i=0; i < stoim.length; i++){
        summ += Number(stoim[i].innerHTML);
      }
      document.getElementById('itog').innerHTML = summ;
      document.getElementById('tovarInput').value = summ;
    }
    function viewDiv(){
      document.getElementById("div1").style.display = "block";
      }
  </script>
  <script type="text/javascript">
    
    function send() {
      
      var nameperson = document.getElementById('nameperson').value;
      var phone =document.getElementById('phone').value;
      var adres = document.getElementById('adres').value;
      var tovar = document.getElementById('tovar').value;
      var summa = document.getElementById('tovarInput').value;
      var mail = document.getElementById('mail').value;
      var comment = document.getElementById('comment').value;


       $.ajax({
          type:'POST',
          url:'ajaxKorzina.php',
          data:{nameperson:nameperson, phone:phone, adres:adres,tovar:tovar,summa:summa,mail:mail,comment:comment},
          dataType: "json",
          success: function(result){
            alert('данные отправлены');
          }

          
          

    });
}
  </script>
</body>

</html>
