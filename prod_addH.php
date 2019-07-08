<?php
session_start();
if ((isset($_GET['id'])) and (isset($_GET['kol']))){
		$value=$_GET['id'];
		$kolvo=$_GET['kol'];
		$_SESSION['bdH'][$value] = $kolvo;
}
?>