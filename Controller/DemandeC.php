<?php
	include 'C:\xampp0\htdocs\Service\config.php';
	include_once 'C:\xampp0\htdocs\Service\Model\Demande.php';
	class DemandeC {
		function afficherDemande(){
			$sql="SELECT * FROM demandes";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function supprimerDemande($idde){
			$sql="DELETE FROM demandes WHERE idde=:idde";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idde', $idde);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function ajouterDemande($ids){
			$sql="INSERT INTO demandes (idservise) 
			VALUES (:idservise)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'idservise' => $ids
				]);	
				echo "Demande ajouté !";		
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
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
        function affichertout() {
            $sql = "SELECT demandes.*, tservice.* 
                    FROM demandes 
                    INNER JOIN tservice 
                    ON demandes.idservise = tservice.ids";
            $db = config::getConnexion();
            try {
                $liste = $db->query($sql);
                return $liste;
            } catch (Exception $e) {
                die('Erreur:'. $e->getMessage());
            } 
        }
		

	}
?>