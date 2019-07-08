<?php
include ('base/base.php');

if(isset($_POST['photoRol']) && isset($_POST['nameRol']) && isset($_POST['sostavRol']) && isset($_POST['priceRol']) && isset($_POST['vesRol'])){

   $photoRol  = addslashes( trim($_POST['photoRol']) );
   $nameRol  = addslashes( trim($_POST['nameRol']) );
   $sostavRol  = addslashes( trim($_POST['sostavRol']) );
   $priceRol  = addslashes( trim($_POST['priceRol']) );
   $vesRol  = addslashes( trim($_POST['vesRol']) );

  

  $inc = mysql_query("INSERT INTO `rol` (`id`,`photo`, `name`, `sostav`, `price`, `ves`) VALUES (NULL,'".$photoRol."', '".$nameRol."', '".$sostavRol."', '".$priceRol."', '".$vesRol."')");
  $inc = mysql_query($query);
if($inc){
  echo '<p>Данные отправлены</p>';
 } 



}
?>