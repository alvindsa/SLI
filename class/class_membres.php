<?
class Membres
  private $_nom;
  private $_prenom;
  private $_mail;
  private $_;

  const FORCE_PETITE = 20;
  const FORCE_MOYENNE = 50;
  const FORCE_GRANDE = 80;

 public function __construct($forceInitiale)
{
 $this->setForce($forceInitiale);
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
