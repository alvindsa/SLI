<?php


require_once ('config.php');


  // Si on à affaire a une modification de salle on execute les instructions suivantes.
  if (isset($_POST['modif_application']) and !empty($_POST['modif_application']))
  {
  // Mise en variable 
  $id = $_POST['id_application'];
  $nom = $_POST['nom_application'];
  $niveau = $_POST['niveau'];
  $salle = $_POST['salle']



$req = $bdd->prepare('UPDATE application SET nom = :salle,  om = :salleWHERE idsalle = :id');
$req->execute(array(
    'id' => $salle,
    'nom' => $nom, 



    ))


$req = $bdd->prepare('UPDATE application SET nom = :nom, nom = :nom WHERE id = :id');
$req->execute(array(
   'id' => $id,
   'nom' => $nom, 
   'salle' => $salle,
   'salle' => $niveaus
  )) or die(print_r($req->errorInfo()));








// la salle a été modifié redirection 
echo '<meta http-equiv="refresh" content="0; URL=redirection_succes.php?redirection=2" />';

 

  {

  //echo '<meta http-equiv="refresh" content="0; URL=redirection_error.php?redirection=20" />';

  }

  
 

?>
