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

public function get_ID()
{
    return $this->_id;
}

public function setID($id)
{
    $this->_id = $id;
    return $this;
}
 


public function getNOM()
{
    return $this->_nom;
}

public function setNOM($nom)
{
    $this->_nom = $nom;
    return $this;
}

public function getPRENOM()
{
    return $this->_prenom;
}

<<<<<<< HEAD
public function setPRENOM($prenom)
{
    $this->_prenom = $prenom;
    return $this;
}

public function getPRENOM()
{
    return $this->_prenom;
}

public function setPRENOM($prenom)
{
    $this->_prenom = $prenom;
    return $this;
=======
public function getID()
{
    return $this->_id;
>>>>>>> 1a3d9344dfadafd65a178cf69c9288c3e42db9dd
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
