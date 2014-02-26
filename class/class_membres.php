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













  public function setForce($force)  {
    // On vérifie qu'on nous donne bien soit une « FORCE_PETITE », soit une « FORCE_MOYENNE », soit une « FORCE_GRANDE ».
  if (in_array($force, array(self::FORCE_PETITE, self::FORCE_MOYENNE, self::FORCE_GRANDE)))
   {
      $this->_force = $force;
   }
  }












 // Notez que le mot-clé static peut être placé avant la visibilité de la méthode (ici c'est public).
  public static function parler()
  {
    echo 'Je vais tous vous tuer !';
  }



} 





?>
