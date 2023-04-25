<?php
	include 'C:\xampp0\htdocs\Service\config.php';
	include_once 'C:\xampp0\htdocs\Service\Model\Service.php';
	class ServiceC {
		function afficherService(){
			$sql="SELECT * FROM tservice";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function supprimerService($ids){
			$sql="DELETE FROM tservice WHERE ids=:ids";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':ids', $ids);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function ajouterService($Service){
			$sql="INSERT INTO tservice (ids, nom, prix, type) 
			VALUES (:ids,:nom,:prix, :type)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'ids' => $Service->getId(),
					'nom' => $Service->getNom(),
					'prix' => $Service->getPrix(),
					'type' => $Service->getType()
				]);	
				echo "Service ajouté !";		
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererService($ids){
			$sql="SELECT * from tservice where ids=$ids";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$Service=$query->fetch();
				return $Service;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierService($Service, $ids){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE tservice SET 
						nom= :nom, 
						Prix= :Prix, 
						type= :type 
					WHERE ids= :ids'
				);
				$query->execute([
					'nom' => $Service->getNom(),
					'Prix' => $Service->getPrix(),
					'type' => $Service->getType(),
					'ids' => $ids
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>