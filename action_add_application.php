<?php
require_once ('config.php');

 if (isset($_POST['ajout_application']) and !empty($_POST['ajout_application']))
 {
 	// mise en variable et test de la confomité du nom
  	$salle = $_POST['ajout_salle'];

 	$req = $bdd->prepare('INSERT INTO salle VALUES(:nom, :id_salle)');
	$req->execute(array(
   'nom' => NULL,
   'id_salle' => $salle
   )) or die(print_r($req->errorInfo()));

// La salle à bien été ajouté rediretion
 echo '<meta http-equiv="refresh" content="0; URL=redirection_succes.php?redirection=1" />';
 }
 else 
 {

echo '<meta http-equiv="refresh" content="0; URL=redirection_error.php?redirection=1" />'; 
 }



?>