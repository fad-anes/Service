<?php
	include 'C:\xampp0\htdocs\Service\Controller\DemandeC.php';
	$DemandeC = new DemandeC();
	$DemandeC->supprimerDemande($_GET["idde"]);
	header('Location:AfficherDemande.php');
?>