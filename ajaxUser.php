<?php
include ('base/base.php');

if(isset($_POST['login']) && isset($_POST['password']) ){

   $login  = addslashes( trim($_POST['login']) );
   $password  = addslashes( trim($_POST['password']) );
  
  

  

  $inc = mysql_query("INSERT INTO `users` (`id`,`login`, `password`) VALUES (NULL,'".$login."', '".$password."')");
  $inc = mysql_query($query);
if($inc){
  echo '<p>Данные отправлены</p>';
 } 



}
?>