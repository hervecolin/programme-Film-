<?php                 //fichier rea artist test film formulaire  et cible


 abstract class Artistes   //abtract class car non concrete !
 
 {
	 protected $_prenom;    //protected pour la class parent !
	 protected $_nom;
 
     protected function __construct($prenom, $nom) 
   { 
    $this->_prenom = $prenom; 
    $this->_nom = $nom; 
   } 
abstract protected function getInfos();// force les filles à redéfinir cette méthode


public function getPrenom() //attention au synthaxe getter !
   { 
 return $this->_prenom;
   }
   
   public function getNom() 
   { 
 return $this->_nom;
   }
 public function setPrenom($prenom)

  {
$this->_prenom=$prenom;
  }
 public function setNom($nom)

  {
$this->_nom=$nom;
  }
  
 }

?>