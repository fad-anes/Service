<?php
	class Service{
		private $ids;
		private $nom;
		private $prix;
		private $type;
	
		public function __construct($ids, $nom, $prix, $type) {
			$this->ids = $ids;
			$this->nom = $nom;
			$this->prix = $prix;
			$this->type = $type;
		}
	
		public function getId() {
			return $this->ids;
		}
	
	
		public function getNom() {
			return $this->nom;
		}
	
		public function setNom($nom) {
			$this->nom = $nom;
		}
	
		public function getPrix() {
			return $this->prix;
		}
	
		public function setPrix($prix) {
			$this->prix = $prix;
		}
	
		public function getType() {
			return $this->type;
		}
	
		public function setType($type) {
			$this->type = $type;
		}
		
	}


?>