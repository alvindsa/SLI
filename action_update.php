<?php


require_once ('config.php');


  // Si on à affaire a une modification de salle on execute les instructions suivantes.
  if (isset($_POST['nom_salle']) and !empty($_POST['nom_salle']))
  {
  // Mise en variable 
  $id = $_POST['id_salles'];
  $salle = $_POST['nom_salle'];
  



$req = $bdd->prepare('UPDATE salle SET noms = :salle WHERE idsalle = :id');
$req->execute(array(
    'salle' => $salle,
    'id' => $id )) or die(print_r($req->errorInfo()));

// la salle a été modifié redirection 
echo '<meta http-equiv="refresh" content="0; URL=redirection_succes.php?redirection=2" />';



  }



  elseif (isset($_POST['supprsalle']) and !empty($_POST['supprsalle']) and is_numeric($_POST['supprsalle']))
  {

  $salle = $_POST['supprsalle'];

  $req = $bdd->prepare('UPDATE salle SET noms = :salle WHERE idsalle = :id');
  $req->execute(array(
    'salle' => $salle,
    'id' => $id )) or die(print_r($req->errorInfo()));

  
   
  } else 


  {

  //echo '<meta http-equiv="refresh" content="0; URL=redirection_error.php?redirection=20" />';

  }

  
 

?>
