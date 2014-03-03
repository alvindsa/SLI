<?php
class Membres {

	private $_id;
  	private $_nom;
  	private $_prenom;
  	private $_mail;
  	private $_mdp ;
  	private $_key;
  	private $_siren;
  	private $_adresse;
  	private $_code_postal;
  	private $_ville;


 
public function setMDP($mdp)
{
    $this->_mdp = $mdp;
    return $this;
}

public function getMDP()
{
    return  $this->_mdp;
}

public function getID()
{
    return $this->_id;
}

public function setID($id)
{
    $this->_ID = $id;
    return $this;
}



public function getNOM()
{
    return $this->_NOM;
}

public function setNOM($NOM)
{
    $this->_nom = $NOM;
    return $this;
}














 // Notez que le mot-clé static peut être placé avant la visibilité de la méthode (ici c'est public).
  public static function parler()
  {
    echo 'Je vais tous vous tuer !';
  }



} 





?>
