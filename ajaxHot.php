<?php
include ('base/base.php');

if(isset($_POST['photoHot']) && isset($_POST['nameHot']) && isset($_POST['sostavHot']) && isset($_POST['priceHot']) && isset($_POST['vesHot'])){

   $photoHot  = addslashes( trim($_POST['photoHot']) );
   $nameHot  = addslashes( trim($_POST['nameHot']) );
   $sostavHot  = addslashes( trim($_POST['sostavHot']) );
   $priceHot  = addslashes( trim($_POST['priceHot']) );
   $vesHot  = addslashes( trim($_POST['vesHot']) );

  

  $inc = mysql_query("INSERT INTO `hot` (`id`,`photo`, `name`, `sostav`, `price`, `ves`) VALUES (NULL,'".$photoHot."', '".$nameHot."', '".$sostavHot."', '".$priceHot."', '".$vesHot."')");
  $inc = mysql_query($query);
if($inc){
  echo '<p>Данные отправлены</p>';
 } 



}
?>