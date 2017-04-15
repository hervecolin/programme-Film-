<?php
require_once ("classe/Artistes.php");   //require_once Artiste...
class Comedien extends Artistes{      //extends artiste !parenth !!


private $_film;                 //affection de mes private attributs...
private $_realisateur;
private $_comedien;
private $_nbreFilm;

   public function __construct($nom,$prenom,$film,$realisateur,$comedien,$nbreFilm){  //warning parenth function construct...
	
	$this->_film=$film;
	$this->_realisateur=$realisateur;
	$this->_comedien=$comedien;
	$this->_nbreFilm=$nbreFilm;
	
	parent::__construct($nom,$prenom);  //rappel du parent ...
   }
	

   public function getInfos (){
	   echo "Le nom de l'artiste est ".$this->_nom." et son prénom est ". $this->_prenom. 
	   ". Il a joué dans le film ".$this->_film." avec comme réalisateur ".$this->_realisateur.
	   " et son ami le comédien ".$this->_comedien.". Il a aussi joué dans ".$this->_nbreFilm." autres films très réussis !";
   }
   
   public function getFilm (){
	   return $this->_film;
   }
   public function setFilm($film){
	   $this->_film=$film;
   }
   public function getRealisateur(){
	   return $this->_realisateur;
   }
   
   public function setRealisateur($realisateur){
	   $this->_realisateur;
   }
   
   public function getComedien (){
	   return $this->_comedien;
	  
   }

   public function setComedien($comedien){
	   $this->_comedien=$comedien;
   }
   public function getNbreFilm(){
	   return $this->_nbreFilm;
   }
   public function setNbreFilm($nbreFilm){
	   $this->_nbreFilm=$nbreFilm;
   }
   
   
}  
?>