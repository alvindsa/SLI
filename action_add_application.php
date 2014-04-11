<?php
require_once ('config.php');

 if (isset($_POST['ajout_application']) and !empty($_POST['ajout_application']))
 {
 	// mise en variable et test de la confomité du nom
  	$application = $_POST['ajout_application'];
  	
  	$salle = NULL;

     

 	$version = '';

    if (!empty($_POST['niveau']))
    { 
    	$niveau = serialize($_POST['niveau']); 

	}

if (!empty($_POST['salle']))
    { 
      $array_salle = serialize($_POST['salle']);

  }

 	$req = $bdd->prepare('INSERT INTO application VALUES(:id, :nom, :salle, :niveau, :version)');
	$req->execute(array(
   'id' => NULL,
   'nom' => $application,
   'salle' => $array_salle,
   'niveau' => $niveau,
   'version' => $version
   )) or die(print_r($req->errorInfo()));

// La salle à bien été ajouté rediretion
 echo '<meta http-equiv="refresh" content="0; URL=redirection_succes.php?redirection=1" />';
 }
 else 
 {

echo '<meta http-equiv="refresh" content="0; URL=redirection_error.php?redirection=1" />'; 
 }



?>