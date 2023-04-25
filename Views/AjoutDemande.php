<?php
	include 'C:\xampp0\htdocs\Service\Controller\DemandeC.php';
	$DemandeC = new DemandeC();
	$DemandeC->ajouterDemande($_GET["ids"]);
	header('Location:AfficherDemande.php');
?>