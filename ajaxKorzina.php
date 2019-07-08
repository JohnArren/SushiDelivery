<?php

include "base/base.php";

if(isset($_POST['nameperson']) && isset($_POST['phone']) && isset($_POST['mail']) && isset($_POST['adres'])&& isset($_POST['comment'])){

   $nameperson  = addslashes( trim($_POST['nameperson']) );
   $phone = trim($_POST['phone']);
   $adres  = addslashes( trim($_POST['adres']));
   $tovar  = addslashes(( trim($_POST['tovar'])) );
   $summa  = trim($_POST['summa']);
   $mail  = addslashes( trim($_POST['mail'])  );
   $comment  = addslashes( trim($_POST['comment']));
   $date  = date("Y-m-d H:i:s");
    $inc = "INSERT INTO `korzina` (`nameperson`, `phone`, `adres`, `tovar`, `summa`, `mail`,`comment`,`date`) VALUES ('".$nameperson."', ".$phone.", '".$adres."', '".$tovar."', ".$summa.", '".$mail."', '".$comment."', '".$date."')";
  mysql_query($inc) or die($inc);
if($inc){
  echo '<p>Данные отправлены</p>';
} 
}
?>