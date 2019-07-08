<?php
include ('base/base.php');

if(isset($_POST['name']) && isset($_POST['mail']) && isset($_POST['message'])){

   $name  = addslashes( trim($_POST['name']) );
   $mail  = addslashes( trim($_POST['mail']) );
   $message  = addslashes( trim($_POST['message']) );
   $date  = date("Y-m-d H:i:s");

  $inc = mysql_query("INSERT INTO `otzivi` (`id`,`name`, `mail`, `message`, `date`) VALUES (NULL,'".$name."', '".$mail."', '".$message."', '".$date."')");
  $inc = mysql_query($query);
if($inc){
  echo '<p>Данные отправлены</p>';
 } 



}
?>