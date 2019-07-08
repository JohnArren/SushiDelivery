<?php
include ('base/base.php');

if(isset($_POST['url']) && isset($_POST['text'])){

   $url  = addslashes( trim($_POST['url']) );
   $text  = addslashes( trim($_POST['text']) );
	$date  = date("Y-m-d H:i:s");
  $inc = mysql_query("INSERT INTO `news` (`id`,`photo`, `text`,`date`) VALUES (NULL,'".$url."', '".$text."','".$date."')");
  $inc = mysql_query($query);
if($inc){
  echo '<p>Данные отправлены</p>';
 } 



}
?>