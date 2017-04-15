<?php
require_once("classe/Artistes.php");
  //appel de la class artiste !!
class Chanteur extends Artistes {     //function extends !! pour heritage

	
	private $_style;
	private $_disque;
	private $_tournee;
	private $_annee;
	
	public function __construct ($nom,$prenom,$style,$disque,$tournee,$annee){  //ne pas oublié tous les attributs dans construct!!
		$this->_style=$style;
		$this->_disque=$disque;
		$this->_tournee=$tournee;
		$this->_annee=$annee;
		
		parent::__construct($prenom, $nom);   //warning appel du parent
	}
		
    public function getInfos(){
		
echo "Le nom de l'artiste est ".$this->_nom. " et son prenom est ".$this->_prenom.".  Le style du chanteur est ".
$this->_style." et son disque mythique est ".$this->_disque.
		" . Enfin sa meilleur tournée est en ".$this->_tournee." au ".$this->_annee. " !";  //la concat 
	}
	
   public function getStyle(){           //les getters et setter !!
	   return $this->_style;
   }
   public function setStyle($style){
	   $this->_style=$style;
	   
   }
   public function getDisque(){
	   return $this->_disque;
   }
   public function setDisque($disque){
	   $this->_disque=$disque;
   }
   public function getTournee(){
	   
	   return $this->_tournee;
   }
   public function settournee($tournee){
	   $this->_tournee=$tournee;
   }
   public function getAnnee (){
	   return $this->_annee;
   }
   public function setAnnee (){
	   $this->_annee=$annee;
   }
   public function Image(){
	   
	   echo "<img src='pitt.jpg' class = 'prince'/>";    //ma fonction image !
   }
	
}

?>