<?php
	include 'C:\xampp0\htdocs\Service\Controller\ServiceC.php';
	$ServiceC = new ServiceC();
	$ServiceC->supprimerService($_GET["ids"]);
	header('Location:AfficheService.php');
?>