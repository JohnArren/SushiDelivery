<?php
include ('base/base.php');

if(isset($_POST['photoSushi']) && isset($_POST['nameSushi']) && isset($_POST['sostavSushi']) && isset($_POST['priceSushi']) && isset($_POST['vesSushi'])){

   $photoSushi  = addslashes( trim($_POST['photoSushi']) );
   $nameSushi  = addslashes( trim($_POST['nameSushi']) );
   $sostavSushi  = addslashes( trim($_POST['sostavSushi']) );
   $priceSushi  = addslashes( trim($_POST['priceSushi']) );
   $vesSushi  = addslashes( trim($_POST['vesSushi']) );

  

  $inc = mysql_query("INSERT INTO `sushi` (`id`,`photo`, `name`, `sostav`, `price`, `ves`) VALUES (NULL,'".$photoSushi."', '".$nameSushi."', '".$sostavSushi."', '".$priceSushi."', '".$vesSushi."')");
  $inc = mysql_query($query);
if($inc){
  echo '<p>Данные отправлены</p>';
 } 



}
?>