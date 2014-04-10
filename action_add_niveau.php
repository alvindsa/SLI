<?php
require_once ('config.php');

 if (isset($_POST['ajout_niveau']) and !empty($_POST['ajout_niveau']))
 {
 	// mise en variable et test de la confomité du nom
  	$niveau = $_POST['ajout_niveau'];

 	$req = $bdd->prepare('INSERT INTO niveau VALUES(:id, :niveau)');
	$req->execute(array(
   'id' => NULL,
   'niveau' => $niveau
   )) or die(print_r($req->errorInfo()));

// La salle à bien été ajouté rediretion
 echo '<meta http-equiv="refresh" content="0; URL=redirection_succes.php?redirection=6" />';
 }
 else 
 {

echo '<meta http-equiv="refresh" content="0; URL=redirection_error.php?redirection=6" />'; 
 }



?>