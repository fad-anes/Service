<?php
	class Demande{
		private $idde;
		private $idservise;
	
		public function __construct($idde, $idservise) {
			$this->idde = $idde;
			$this->idservise = $idservise;
		}
	
		public function getIdde() {
			return $this->idde;
		}
	
	
		public function getIdservise() {
			return $this->idservise;
		}
	
		public function setIdservise($idservise) {
			$this->idservise = $idservise;
		}
		
	}


?>