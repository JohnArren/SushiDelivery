<?php
include ('base/base.php');

if(isset($_POST['photoSet']) && isset($_POST['nameSet']) && isset($_POST['sostavSet']) && isset($_POST['priceSet']) && isset($_POST['vesSet'])){

   $photoSet  = addslashes( trim($_POST['photoSet']) );
   $nameSet  = addslashes( trim($_POST['nameSet']) );
   $sostavSet  = addslashes( trim($_POST['sostavSet']) );
   $priceSet  = addslashes( trim($_POST['priceSet']) );
   $vesSet  = addslashes( trim($_POST['vesSet']) );

  

  $inc = mysql_query("INSERT INTO `set` (`id`,`photo`, `name`, `sostav`, `price`, `ves`) VALUES (NULL,'".$photoSet."', '".$nameSet."', '".$sostavSet."', '".$priceSet."', '".$vesSet."')");
  $inc = mysql_query($query);
if($inc){
  echo '<p>Данные отправлены</p>';
 } 



}
?>